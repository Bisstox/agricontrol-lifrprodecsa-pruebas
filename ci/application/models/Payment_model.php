<?php

class Payment_model extends CI_Model
{

    public function get_farms()
    {
        // Obtener semanas desde la vista
        $this->db->select('id, nombre as farm');
        $this->db->from('z_finca');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_farm_by_id($farm_id)
    {
        // Obtener semanas desde la vista
        $this->db->select('nombre as farm');
        $this->db->from('z_finca');
        $this->db->where('id', $farm_id);
        $query = $this->db->get();
        $result = $query->row(); // Obtener una sola fila

        if ($result) {
            return $result->farm; // Retornar el nombre de la finca
        } else {
            return null; // Retornar null si no se encuentra la finca
        }
    }

    public function get_available_weeks($farm_id)
    {
        // Subconsulta para obtener las semanas ya registradas en payment_records con la finca seleccionada
        $this->db->select('DISTINCT (payment_week) AS payment_week')
            ->from('payment_records')
            ->where('operator_id_finca', $farm_id);

        $subquery = $this->db->get_compiled_select(); // Compilar subconsulta

        // Consulta principal para obtener las semanas que NO están en la tabla payment_records
        $this->db->select('DISTINCT (weeknumber) AS payment_week')
            ->from('vw_pm_temporaryworkers')
            ->where("weeknumber NOT IN ($subquery)", NULL, FALSE)// Subconsulta para excluir semanas ya registradas
            ->where("weeknumber > '202425'");

        $query = $this->db->get();
        return $query->result_array(); // Retornar el resultado como un array
    }

    public function get_weeks()
    {
        // Obtener semanas desde la vista
        $this->db->select('DISTINCT(weeknumber) AS week');
        $this->db->from('vw_pm_temporaryworkers');
        $this->db->where('weeknumber > "202425"');
        $this->db->where('weeknumber NOT IN (SELECT DISTINCT(payment_week) FROM payment_records)', NULL, FALSE);
        // $this->db->where('operator_id_finca NOT IN (SELECT DISTINCT(payment_week) FROM payment_records)', NULL, FALSE);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_unique_dates_by_week($selected_week)
    {
        $this->db->select('DISTINCT(operation_date)');
        $this->db->from('vw_temporaryworkers_pivot');
        $this->db->where('payment_week', $selected_week);
        $this->db->order_by('operation_date', 'ASC');
        $query = $this->db->get();
        return $query->result_array(); // Devuelve las fechas en un array
    }

    public function get_data_by_week($selected_week, $farmId)
    {
        $this->db->select('operator_id, operator_iddoc, operator_name, subtask_name, operation_date,subtotal_payment');
        $this->db->from('vw_temporaryworkers_pivot');
        $this->db->where('payment_week', $selected_week);
        $this->db->where('operator_id_finca', $farmId);
        $this->db->order_by('subtask_name, operator_name');
        $query = $this->db->get();
        return $query->result_array(); // Devuelve los datos filtrados
    }

    public function pivot_data($selected_week, $farmId)
    {
        // Obtener las fechas únicas de la semana seleccionada
        $unique_dates = $this->get_unique_dates_by_week($selected_week);

        // Obtener los datos de la semana seleccionada
        $data = $this->get_data_by_week($selected_week, $farmId);

        // Crear una estructura para pivotar los datos
        $pivoted_data = [];

        foreach ($data as $row) {
            // Inicializar el operador si no existe en el array pivotado
            if (!isset($pivoted_data[$row['operator_iddoc']])) {
                $pivoted_data[$row['operator_iddoc']] = [
                    'operator_iddoc' => $row['operator_iddoc'],
                    'operator_name' => $row['operator_name'],
                    'subtask_name' => $row['subtask_name'],
                    'totals' => array_fill_keys(array_column($unique_dates, 'operation_date'), 0), // Inicializar las fechas a 0
                ];
            }

            // Sumar el subtotal a la fecha correspondiente
            $pivoted_data[$row['operator_iddoc']]['totals'][$row['operation_date']] += $row['subtotal_payment'];
        }

        return $pivoted_data; // Retorna los datos pivotados
    }


    /**
     * Obtener las semanas únicas en la vista vw_temporaryworkers_pivot
     *
     * @return array Arreglo con las semanas únicas
     */
    public function get_unique_weeks()
    {
        $this->db->select('DISTINCT(payment_week)');
        $this->db->from('vw_temporaryworkers_pivot');
        $this->db->order_by('payment_week', 'ASC');
        $query = $this->db->get();
        return $query->result_array(); // Devuelve las semanas en un array
    }

    /**
     * Filtra los registros de la vista vw_pm_temporaryworkers
     * por la semana y status 6 (pago realizado)
     *
     * @param int $week Número de semana
     * @param int $farm Finca
     *
     * @return array Registros filtrados
     */
    public function get_filtered_records($week, $farm)
    {
        // Filtrar por la semana y status 6 en la vista
        $this->db->select('
            id,
            weeknumber,
            operation_date,
            operator_id,
            operator_name,
            supervisor_name,
            subtask_name,
            lot_name,
            module_name,
            pm_quantity,
            subtask_rate,
            pm_total,
            operator_iddoc,
            operator_id_finca
        '); // Excluir las columnas innecesarias
        $this->db->from('vw_pm_temporaryworkers');
        $this->db->where('weeknumber', $week);
        $this->db->where('operator_id_finca', $farm);
        $this->db->where('operator_id_status', 6);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Guarda o actualiza un registro de pago en la tabla payment_records
     *
     * @param array $payment Array con los datos del pago a guardar o actualizar,
     *                       debe contener los siguientes campos:
     *                       - pm_id: Identificador del registro
     *                       - week: Semana correspondiente al pago
     *                       - bonus_discount: Descuento de bonificaci n
     *                       - observations: Observaciones del pago
     *                       - operator_id_finca: Identificador de la finca
     *
     * @return void
     */
    public function save_payment($payment)
    {
        // Guardar o actualizar registros de pago
        $data = array(
            'pm_id' => $payment['pm_id'],
            'payment_week' => $payment['week'],
            'bonus_discount' => $payment['bonus_discount'],
            'observations' => $payment['observations'],
            'operator_id_finca' => $payment['operator_id_finca'],
        );

        // Log del valor de $payment
        log_message('error', 'Valor de $payment: ' . print_r($payment, true));

        // Log del valor de $data
        log_message('error', 'Valor de $data: ' . print_r($data, true));

        // Reemplazar el registro en la tabla payment_records
        $this->db->replace('payment_records', $data);
    }


    /**
     * Obtener resumen de pagos por finca y semana
     *
     * @param int $paymentWeek N mero de semana
     * @param int $farmId ID de la finca
     *
     * @return array
     */
    public function get_resume_data_edit($paymentWeek, $farmId)
    {
        $this->db->where('farm_id', $farmId);
        $this->db->where('payment_week', $paymentWeek);
        $query = $this->db->get('vw_pm_temporaryworkers_resume_edit');

        return $query->result();
    }

    public function get_resume_data($paymentWeek, $farmId)
    {
        $this->db->where('farm_id', $farmId);
        $this->db->where('payment_week', $paymentWeek);
        $query = $this->db->get('vw_pm_temporaryworkers_resume');

        return $query->result();
    }


    /**
     * Guardar deducciones de un trabajador
     *
     * @param array $data Array de deducciones a guardar
     *
     * @return bool TRUE si se guardaron exitosamente, FALSE de lo contrario
     */
    public function save_deductions($data)
    {
        return $this->db->insert_batch('worker_deductions', $data);
    }

    public function update_deductions($data)
    {
        return $this->db->update_batch('worker_deductions', $data, 'id');
    }


    public function get_payment_report_by_week($paymentWeek, $farmId)
    {
        $this->db->where('payment_week', $paymentWeek);
        $this->db->where('operator_id_finca', $farmId);
        $query = $this->db->get('vw_pm_temporaryworkers_weeks');
        return $query->result_array();
    }

    // Obtener los registros desde la vista
    public function get_all_records()
    {
        $query = $this->db->get('vw_pm_temporaryworkers_reports');
        return $query->result();
    }

    public function get_records_by_week($week, $farm)
    {
        $query = $this->db->select('*')
            ->from('vw_pm_temporaryworkers_reports')
            ->where('weeknumber', $week)
            ->where('operator_id_finca', $farm)
            ->get();

        return $query->result();
    }

    // Actualizar el campo bonus_discount y observations
    public function update_payment_record($pm_id, $bonus_discount, $observations)
    {
        $data = array(
            'bonus_discount' => $bonus_discount,
            'observations' => $observations
        );
        $this->db->where('pm_id', $pm_id);
        $this->db->update('payment_records', $data);
    }

}
