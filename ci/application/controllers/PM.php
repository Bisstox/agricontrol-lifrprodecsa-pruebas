<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PM extends Public_controller {

	public function __construct()
	{
		parent::__construct();

        $this->load->library('ion_auth');

		if (!$this->ion_auth->logged_in())
		{
		  redirect('auth/login');
		}

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->model('pm_model');
        $this->load->model('fincas_model');

        $this->_init();
		
	}

    private function _init()
	{

	}

	public function index()
	{
        try{
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
	public function reportePagos()
	{
        try{
            $crud = new grocery_CRUD();

            $currentTable = 'vw_reporte_pm';

            $crud->set_theme('tablestrap4_datefilter');
            // $crud->set_model('pm_model');
            $crud->set_table($currentTable);
            $crud->set_primary_key('cedula');
            $crud->set_subject('PM');
            $crud->unset_jquery();
            
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
            $crud->unset_read();
            // $crud->unset_export();
            // $crud->unset_print();
            $this->config->load ('grocery_crud');
            $this->config->set_item('default_per_page', '1000000');


            $crud->columns('fecha', 'nombre_finca', 'nombre_trabajador', 'cedula',  'descripcion_estado', 'nombre_supervisor', 'codigo_labor', 'grupo_labor', 'nombre_labor', 'lote', 'modulo', 'cantidad', 'unidad_labor', 'tarifa', 'total', 'cultivo', 'comentario');
            $crud
            ->display_as('fecha', 'Fecha')
            ->display_as('nombre_supervisor', 'Supervisor')
            ->display_as('nombre_trabajador', 'Trabajador')
            ->display_as('cedula', 'Cédula')
            ->display_as('descripcion_estado', 'Estado')
            ->display_as('nombre_subtarea', 'Subtarea')
            ->display_as('lote', 'Lote')
            ->display_as('codigo_labor', 'Código Labor')
            ->display_as('nombre_labor', 'Labor')
            ->display_as('modulo', 'Módulos')
            ->display_as('cantidad', 'Cantidad')
            ->display_as('unidad_labor', 'Unidad')
            ->display_as('tarifa', 'Tarifa')
            ->display_as('total', 'Total')
            ->display_as('cultivo', 'Cultivo')
            ->display_as('comentario', 'Comentarios');

            $dateFrom = $this->input->get('fechaDesde');
            $dateTo = $this->input->get('fechaHasta');

            // if(!isset($dateFrom) || !isset($dateTo)) {
            //     $query = $this->db->query("SELECT MAX(STR_TO_DATE(fecha, '%Y-%m-%d')) AS maxDate FROM " . $currentTable);
            //     $row = $query->row();
            //     $maxDate = $row->maxDate;

            //     $dateFrom = $maxDate;
            //     $dateTo = $maxDate;
            // }            

            $dateFrom = date("Y-m-d", strtotime($dateFrom));
            $dateTo = date("Y-m-d", strtotime($dateTo));

            $dateFrom = strval($dateFrom);
            $dateTo = strval($dateTo);    

            $state = $crud->getState();

            if ($state == 'export' || $state == 'print') {
                
                if ($this->uri->segment(4) === "fechaDesde") {
                    $reportDateFrom = $this->uri->segment(5);
                    $crud->where('fecha >= "' . $reportDateFrom . '"');
                }

                if ($this->uri->segment(6) === "fechaHasta") {
                    $reportDateTo = $this->uri->segment(7);
                    $crud->where('fecha <= "' . $reportDateTo . '"');
                }

                if ($this->uri->segment(8) === "finca") {
                    $reportIdFinca = $this->uri->segment(9);
                    $crud->where('id_finca = ' . $reportIdFinca );
                }

            } else {
                $crud->where('fecha >= "' . $dateFrom. '"');
                $crud->where('fecha <= "' . $dateTo . '"');
                
                $filtro_finca_pm = $this->input->get('id_finca');
                if(isset($filtro_finca_pm)) {
                    if($filtro_finca_pm > 0) {
                        $crud->where('id_finca', $filtro_finca_pm);
                    }
                }       
            }

            $crud->set_relation('lote', 'z_lote', 'lote');

            $this->db->select('id, modulo');
            $results = $this->db->get('z_modulo')->result();
            $modulos_multiselect = array();
    
            foreach ($results as $result) {
                $modulos_multiselect[$result->id] = $result->modulo;
            }
    
            $crud->field_type('modulo', 'multiselect', $modulos_multiselect);

            $output = $crud->render();
            
            $data['listadoFincas'] = $this->fincas_model->getFincasCombobox();
            
            $output->data = $data;

            $this->load->view('Crud/pm-report',(array)$output);

        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }

    public function editarPM() {
        try{
            $crud = new grocery_CRUD();

            $crud->set_theme('tablestrap4');
            // $crud->set_model('pm_model');
            $crud->set_table('z_tabla_pm');
            $crud->set_subject('PM');

            $crud->set_relation('finca', 'z_finca', 'nombre');
            $crud->set_relation('responsable', 'z_personal', 'nombre');
            $crud->set_relation('trabajador', 'z_personal', 'nombre');
            $crud->set_relation('cultivo', 'z_cultivo', 'nombre');
            $crud->set_relation('lote', 'z_lote', 'lote');
            $crud->set_relation('subtarea', 'z_subtarea', 'nombre_subtarea');

            $state = $crud->getState();

            if($state == "add")
			{
				$crud->field_type('numero_registro', 'hidden');
			}

			if($state == "edit")
			{
				$crud->field_type('numero_registro', 'readonly');
			}	

            $output = $crud->render();

            $this->load->view('Crud/default',(array)$output);

        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }


    function export($filtro_fecha)
    {
     $file_name = 'reporte_pm'.date('Ymd').'.csv'; 
        header("Content-Description: File Transfer"); 
        header("Content-Disposition: attachment; filename=$file_name"); 
        header("Content-Type: application/csv;");
      
        // get data 
        $report_data = $this->pm_model->date_filter($filtro_fecha);
   
        // file creation 
        $file = fopen('php://output', 'w');
    
        $header = array("Student Name","Student Phone"); 
        fputcsv($file, $header);
        foreach ($report_data->result_array() as $key => $value)
        { 
          fputcsv($file, $value); 
        }
        fclose($file); 
        exit; 
    }

}