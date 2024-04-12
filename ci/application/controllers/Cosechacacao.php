<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Cosechacacao extends Public_controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->library('ion_auth');

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');

		$this->load->model('fincas_model');

		$this->_init();

	}

	private function _init()
	{

	}

	public function index()
	{

		try {
			/* #region CRUD Configuration */
			$crud = new grocery_CRUD();

			$crud->set_theme('tablestrap4_datefilter');
			$crud->set_table('z_cosecha_cacao');
			$crud->set_subject('Cosecha de Cacao');
			$crud->unset_read();
			$crud->unset_jquery();
			$crud->unset_clone();
			// $crud->unset_edit();
			$crud->unset_delete();

			$group = $this->ion_auth->get_users_groups()->row()->id;

			// Check permissions

			if ($group != 1) {
				$crud->unset_delete();
			}

			if ($group != 1 && $group != 2) {
				redirect('/', 'refresh');
			}

			$crud->callback_column('total', array($this, '_totalWeight_callback'));

			$crud->set_relation('supervisor', 'z_personal', 'nombre');
			$crud->set_relation('subtarea', 'z_subtarea', 'nombre_subtarea');
			$crud->set_relation('finca', 'z_finca', 'nombre');
			$crud->set_relation('trabajador', 'z_personal', 'nombre');
			$crud->set_relation('tarea', 'z_tarea', 'nombre');
			$crud->set_relation('lote', 'z_lote', 'lote');
			$crud->set_relation('modulo', 'z_modulo', 'modulo');

			$crud->columns(
				'supervisor',
				'finca',
				'lote',
				'modulo',
				'fecha',
				'hora',
				'tarea',
				'subtarea',
				'trabajador',
				'total',
				'saco1',
				'saco2',
				'saco3',
				'saco4',
				'saco5',
				'saco6',
				'saco7',
				'saco8',
				'saco9',
				'saco10',
				'saco11',
				'saco12',
				'saco13',
				'saco14',
				'saco15',
				'observaciones'
			);
			/* #endregion */

			/* #region Date filter */

			$dateFrom = $this->input->get('fechaDesde');
			$dateTo = $this->input->get('fechaHasta');

			isset($dateFrom) ? $dateFrom = date("Y-m-d", strtotime($dateFrom)) : $dateFrom = date("Y-m-d");
			isset($dateFrom) ? $dateTo = date("Y-m-d", strtotime($dateTo)) : $dateTo = date("Y-m-d");

			$dateFrom = strval($dateFrom);
			$dateTo = strval($dateTo);
			/* #endregion */

			/* #region Print & Export filter */

			$crud->callback_before_update(array($this,'_updateTotalWeight'));

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

				if ($this->uri->segment(8) === "id_finca") {
					$reportIdFinca = $this->uri->segment(9);
					$crud->where('finca = "' . $reportIdFinca . '"');
				}

			} else {
				$crud->where('fecha >= "' . $dateFrom . '"');
				$crud->where('fecha <= "' . $dateTo . '"');

				$filtro_finca_pm = $this->input->get('id_finca');
				if (isset($filtro_finca_pm)) {
					if ($filtro_finca_pm > 0) {
						$crud->where('finca', $filtro_finca_pm);
					}
				}
			}
			/* #endregion */

			$output = $crud->render();

			$data['listadoFincas'] = $this->fincas_model->getFincasCombobox();

			$output->data = $data;

			$this->load->view('Crud/date-range_filter', (array) $output);

		} catch (Exception $e) {
			show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
		}
	}

	public function resumen()
	{
		try {

			/* #region CRUD basic configuration */
			$crud = new grocery_CRUD();

			$currentTable = 'vw_cosecha_cacao_resumen';

			$crud->set_theme('tablestrap4_datefilter');
			$crud->set_table($currentTable);
			$crud->set_primary_key('id');
			$crud->set_subject('Cosecha de Cacao');
			// $crud->unset_read();
			$crud->unset_jquery();
			$crud->unset_clone();
			$crud->unset_edit();
			$crud->unset_delete();


			$crud->columns(
				'fecha',
				'supervisor',
				'finca',
				'lote',
				'modulos',
				'tarea',
				'subtarea',
				'jornales',
				'total_peso',
				'total_sacos'
			);

			$crud->set_relation('supervisor', 'z_personal', 'nombre');
			$crud->set_relation('tarea', 'z_tarea', 'nombre');
			$crud->set_relation('subtarea', 'z_subtarea', 'nombre_subtarea');
			$crud->set_relation('finca', 'z_finca', 'nombre');
			// // $crud->set_relation('trabajador', 'z_personal', 'nombre');

			$crud->set_relation('lote', 'z_lote', 'lote');
			// $crud->set_relation('modulo', 'z_modulo', 'modulo');


			// $crud->display_as('nombre', 'Nombre')
			// ->display_as('ha', 'Hectáreas');

			// $crud->columns('nombre', 'ha');

			/* #endregion */

			/* #region Permissions Control */
			$group = $this->ion_auth->get_users_groups()->row()->id;

			if ($group != 1) {
				$crud->unset_delete();
			}

			if ($group != 1 && $group != 2) {
				redirect('/', 'refresh');
			}
			/* #endregion */

			/* #region date filter*/
			$dateFrom = $this->input->get('fechaDesde');
			$dateTo = $this->input->get('fechaHasta');

			isset($dateFrom) ? $dateFrom = date("Y-m-d", strtotime($dateFrom)) : $dateFrom = date("Y-m-d");
			isset($dateFrom) ? $dateTo = date("Y-m-d", strtotime($dateTo)) : $dateTo = date("Y-m-d");

			$dateFrom = strval($dateFrom);
			$dateTo = strval($dateTo);

			/* #endregion */

			/* #region Print & Export filter */
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
					$crud->where('finca = "' . $reportIdFinca . '"');
				}

			} else {
				$crud->where('fecha >= "' . $dateFrom . '"');
				$crud->where('fecha <= "' . $dateTo . '"');

				$filtro_finca_pm = $this->input->get('id_finca');
				if (isset($filtro_finca_pm)) {
					if ($filtro_finca_pm > 0) {
						$crud->where('finca', $filtro_finca_pm);
					}
				}
			}
			/* #endregion */

			// $crud->callback_column('jornales', array($this, '_sumWageColumn_callback'));

			/* #region Sum Wages */
			$this->db->select_sum('jornales');
			if ($this->input->get('id_finca')) {
				$this->db->where('finca', $this->input->get('id_finca'));
			}
			if ($this->input->get('fechaDesde')) {
				$this->db->where('fecha >=', $this->input->get('fechaDesde'));
			}
			if ($this->input->get('fechaHasta')) {
				$this->db->where('fecha <=', $this->input->get('fechaHasta'));
			}
			$query = $this->db->get('z_cosecha_cacao');
			$result = $query->row();
			$suma = $result->jornales;
			/* #endregion */

			$output = $crud->render();

			$data['listadoFincas'] = $this->fincas_model->getFincasCombobox();

			$output->data = $data;

			$this->load->view('Crud/date-range_filter', (array) $output);

		} catch (Exception $e) {
			show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
		}
	}

	public function _totalWeight_callback($value, $row)
	{
		return $row->saco1 + $row->saco2 + $row->saco3 + $row->saco4 + $row->saco5 + $row->saco6 + $row->saco7
			+ $row->saco8 + $row->saco9 + $row->saco10 + $row->saco11 + $row->saco12 + $row->saco13 + $row->saco14 + $row->saco15;
	}

	private function _sumWageColumn_callback($value, $row)
	{
		static $total_sum = 0;

		$total_sum += $value;
		return $total_sum;
	}

	function _updateTotalWeight($post_array, $primary_key) {
		$sacos = array($post_array['saco1'], $post_array['saco2'], $post_array['saco3'], $post_array['saco4'], $post_array['saco5'], $post_array['saco6'], $post_array['saco7'], $post_array['saco8'], $post_array['saco9'], $post_array['saco10'], $post_array['saco11'], $post_array['saco12'], $post_array['saco13'], $post_array['saco14'], $post_array['saco15']);
		$post_array['total_peso'] = array_sum($sacos);
		$post_array['total_sacos'] = count(array_filter($sacos, function($saco) { return $saco > 0; }));
		return $post_array;
	}
		

}