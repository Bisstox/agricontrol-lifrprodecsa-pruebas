<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        //$this->load->library('ion_auth');
        $this->load->library('grocery_CRUD');
        $this->load->model('fincas_model');
        $this->load->helper('payment_reports');

        $this->_init();

    }

    private function _init()
    {

    }

    public function index()
    {
        $this->load->model('Payment_model');
        $data['weeks'] = $this->Payment_model->get_weeks(); // Obtener semanas desde la vista
        $data['farms'] = $this->Payment_model->get_farms();
        $this->load->view('payments/payment_view', $data);
    }


    public function get_weeks_by_farm()
    {
        // Cargar el modelo
        $this->load->model('Payment_model');

        // Obtener los datos de la solicitud
        $input = json_decode(trim(file_get_contents('php://input')), true);
        $farm_id = $input['farm_id'];

        // Obtener las semanas disponibles
        $weeks = $this->Payment_model->get_available_weeks($farm_id);


        // Retornar las semanas en formato JSON
        echo json_encode($weeks);
        exit;
        // echo '<pre>';
        // print_r($weeks); // Mostrar lo que está devolviendo la consulta
        // echo '</pre>';
    }


    /**
     * Muestra la vista con los datos pivotados para la semana seleccionada,
     * si no se selecciona una semana, muestra la vista con los datos en bruto.
     *
     * @return void
     */
    public function show_pivoted_data()
    {
        //TODO: filtrar también por finca

        // Cargar el modelo
        $this->load->model('Payment_model');

        // Verificar si el usuario ha seleccionado una semana a través de GET
        $selected_week = $this->input->get('selected_week');
        $farmId = $this->input->get('farmId');

        // Obtener las semanas únicas para el select
        $data['weeks'] = $this->Payment_model->get_unique_weeks();
        $data['resume_data'] = $this->Payment_model->get_resume_data($selected_week, $farmId);
        $data['selected_week'] = $selected_week;

        if ($selected_week) {
            // Obtener los datos pivotados para la semana seleccionada
            $data['pivoted_data'] = $this->Payment_model->pivot_data($selected_week, $farmId);
        }

        // Cargar la vista con los datos
        $this->load->view('payments/payment2_view.php', $data);
    }

    public function edit_pivoted_data()
    {
        // Cargar el modelo
        $this->load->model('Payment_model');

        // Verificar si el usuario ha seleccionado una semana a través de GET
        $selected_week = $this->input->get('selected_week');
        $farmId = $this->input->get('farmId');

        // Obtener las semanas únicas para el select
        // $data['weeks'] = $this->Payment_model->get_unique_weeks();
        $data['resume_data'] = $this->Payment_model->get_resume_data_edit($selected_week, $farmId);
        $data['selected_week'] = $selected_week;

        if ($selected_week) {
            // Obtener los datos pivotados para la semana seleccionada
            $data['pivoted_data'] = $this->Payment_model->pivot_data($selected_week, $farmId);
        }

        // Cargar la vista con los datos
        $this->load->view('payments/payment2edit_view', $data);
    }

    /**
     * Guarda las deducciones de los trabajadores en la base de datos.
     *
     * Recibe las deducciones del formulario y las guarda en la base de datos.
     * Luego redirige a la vista de inicio.
     *
     * @return void
     */
    public function save_deductions()
    {
        $this->load->model('Payment_model');
        $deductions = $this->input->post('deductions', TRUE);
        $selectedWeek = $this->input->get('selected_week', TRUE);

        foreach ($deductions as $deduction) {
            $data[] = [
                'operator_id' => $deduction['operator_id'],
                'farm_id' => $deduction['farm_id'],
                'deduction' => floatval($deduction['deduction']),
                'observation' => $this->security->xss_clean($deduction['observation']),
                'created_at' => date('Y-m-d H:i:s'),
                'payment_week' => $deduction['selected_week']
            ];

            // Inserta los datos en la tabla correspondiente
        }
        $this->Payment_model->save_deductions($data);
        // Redireccionar después de guardar
        redirect('payment/list_adjusments');
    }

    public function update_deductions()
    {
        $this->load->model('Payment_model');
        $deductions = $this->input->post('deductions', TRUE); // XSS Clean
        foreach ($deductions as $deduction) {
            $data[] = [
                'operator_id' => $deduction['operator_id'],
                'farm_id' => $deduction['farm_id'],
                'deduction' => floatval($deduction['deduction']),
                'observation' => $this->security->xss_clean($deduction['observation']),
                'created_at' => date('Y-m-d H:i:s'),
                'payment_week' => $deduction['selected_week'],
                'id' => $deduction['id']
            ];
        }
        // var_dump($data);
        // exit;
        // Inserta los datos en la tabla correspondiente
        $this->Payment_model->update_deductions($data);
        redirect('payment/list_adjusments');
    }



    public function update_deduction($id)
    {
        // Validar los datos
        $this->form_validation->set_rules('deduction', 'Deduction', 'required|numeric');
        $this->form_validation->set_rules('observation', 'Observation', 'trim');

        if ($this->form_validation->run() === FALSE) {
            // Si la validación falla, recargar la vista de edición
            $this->edit($id);
        } else {
            // Obtener los datos del formulario
            $data = [
                'deduction' => $this->input->post('deduction'),
                'observation' => $this->input->post('observation')
            ];

            // Actualizar el registro en la base de datos
            $this->load->model('Payment_model');
            $this->Payment_model->update_deduction($id, $data);

            // Redireccionar a la pantalla de listado o mostrar un mensaje de éxito
            redirect('payment/success');
        }
    }





    /**
     * Filtra los registros de pagos por semana y finca seleccionadas,
     * y los muestra en la vista payment_view.
     *
     * @return void
     */
    public function filter_adjusments()
    {
        $week = $this->input->get('week');
        $farm = $this->input->get('farm');
        $this->load->model('Payment_model');
        $data['payments'] = $this->Payment_model->get_filtered_records($week, $farm);
        $farm_name = $this->Payment_model->get_farm_by_id($farm);
        $data['selected_week'] = $week;
        $data['selected_farm'] = $farm_name;
        $this->load->view('payments/payment_view', $data);
    }

    /**
     * Muestra la vista de listado de pagos
     *
     * @return void
     */
    public function list_adjusments()
    {
        $crud = new grocery_CRUD();

        $currentTable = 'vw_pm_temporaryworkers_weeks';

        $crud->set_theme('tablestrap4');
        // $crud->set_model('pm_model');
        $crud->set_table($currentTable);
        $crud->set_primary_key('payment_week');
        $crud->set_subject('PM');
        // $crud->unset_jquery();

        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
        $crud->unset_read();

        $crud->set_relation('operator_id_finca', 'z_finca', 'nombre');

        // $crud->add_action('Edit Report', '', 'admin/book', 'fa-book', array($this, 'editButton'));
        $crud->add_action('Edit Report', '', 'admin/book', 'fa-book', 'editButton');

        $output = $crud->render();

        $data['listadoFincas'] = '';

        $output->data = $data;

        $this->load->view('Crud/default', (array) $output);
    }

    /**
     * Guarda los pagos enviados desde la vista
     *
     * Inicia una transacción para guardar todos los pagos,
     * si ocurre cualquier error, hace rollback de la transacción
     * y regista el error en el log.
     *
     * Si todos los pagos se guardan correctamente, redirige a
     * show_pivoted_data pasando selected_week como parámetro GET.
     *
     * @return void
     */
    public function save_adjusments()
    {
        $this->load->model('Payment_model');
        $payments = $this->input->post('payments'); // Array de pagos enviados desde la vista

        // Suponemos que todos los operator_id_farm son iguales, tomar el valor del primero
        $farmId = "";
        $selectedWeek = "";

        // Iniciar la transacción aquí para que englobe todos los pagos
        $this->db->trans_start();

        $currentRecord = 0;

        try {
            // Recorrer los pagos
            foreach ($payments as $payment) {
                if (!isset($payment['operator_id_finca'], $payment['week'], $payment['pm_id'])) {
                    log_message('error', 'Faltan datos en el pago: ' . print_r($payment, true));
                    continue; // O manejar el error de otra forma
                }
                $currentRecord = $payment;
                $farmId = $payment['operator_id_finca'];
                $selectedWeek = $payment['week'];

                // Guardar cada pago
                $this->Payment_model->save_payment($payment);
            }

            // Completar la transacción aquí
            $this->db->trans_complete();

            // Verificar el estado de la transacción
            if ($this->db->trans_status() === FALSE) {
                throw new Exception('Error en la transacción de base de datos');
            }

            // Si todo fue bien, redirigir a show_pivoted_data pasando selected_week como parámetro GET
            redirect('payment/show_pivoted_data?selected_week=' . $selectedWeek . '&farmId=' . $farmId);
            exit;
        } catch (Exception $e) {
            // Si ocurre cualquier excepción, hacer rollback de la transacción
            $this->db->trans_rollback();
            // Registrar el error
            log_message('error', 'Error en la transacción: ' . $e->getMessage() . print_r($currentRecord, true));
            // Redirigir a una página de error o mostrar un mensaje
            show_error('Ha ocurrido un error en la transacción: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Muestra la vista de edición de pagos
     *
     * Recibe dos parámetros GET:
     * - farm: Identificador de la finca
     * - week: Número de semana
     *
     * Carga el modelo Payment_model y utiliza su método get_records_by_week
     * para obtener los datos de la vista vw_pm_temporaryworkers_reports,
     * luego pasa los datos a la vista edit_view
     *
     * @return void
     */
    public function edit_adjusments()
    {

        // Cargar el modelo que accede a la vista
        $this->load->model('Payment_model');

        $farm = $this->input->get('farm', TRUE);
        $week = $this->input->get('week', TRUE);

        // Obtener los datos de la vista vw_pm_temporaryworkers_reports
        $data['records'] = $this->Payment_model->get_records_by_week($week, $farm);
        $data['farmId'] = $farm;
        $data['selected_week'] = $week;

        // Cargar la vista de edición
        $this->load->view('payments/edit_view', $data);
    }

    /**
     * Actualiza los registros de pagos enviados desde la vista de edición
     *
     * Recibe los registros de pagos actualizados en el POST, y los
     * actualiza en la base de datos mediante el método update_payment_record
     * del modelo Payment_model. Luego redirige de vuelta a la vista de
     * edición pasando los parámetros selected_farm y selected_week como
     * parámetros GET.
     *
     * @return void
     */
    public function update_adjusments()
    {
        // Obtener datos del POST
        $updated_data = $this->input->post('records');

        // Cargar el modelo
        $this->load->model('Payment_model');

        $farmId = $this->input->get('selected_farm', TRUE);
        $selected_week = $this->input->get('selected_week', TRUE);

        // Actualizar cada registro
        foreach ($updated_data as $record) {
            $this->Payment_model->update_payment_record($record['pm_id'], $record['bonus_discount'], $record['observations']);
        }

        // Redirigir de vuelta a la vista de edición
        redirect('payment/edit_pivoted_data?farmId=' . $farmId . '&selected_week=' . $selected_week);
    }

}