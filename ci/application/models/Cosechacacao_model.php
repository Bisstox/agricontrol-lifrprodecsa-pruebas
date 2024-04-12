<?php

class Cosechacacao_model  extends CI_Model  {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('fincas_model');
        $this->load->model('personal_model');
        $this->load->model('tareas_model');
        $this->load->model('subtareas_model');
        $this->load->model('lotes_model');
    }

    function db_table_exists($table_name = null)
    {
    	return $this->db->table_exists($table_name);
    }

    public function get_all(){
        $this->db->select('id', 'finca', 'supervisor');
        $result = $this->db->get('z_cosecha_cacao');
        $cosecha = $result->result_array();
        return $cosecha;
    }

    public function createFromAPI($data) {

        $this->load->helper('datetime_validation_helper');

        if (!$this->fincas_model->existsRecord($data['finca'])) {
            throw new Exception("La finca indicada no existe. Se ha cancelado la operación.");
        }

        if (!$this->lotes_model->isValidLot($data['finca'], $data['lote'])) {
            throw new Exception("El lote indicado no existe. Se ha cancelado la operación.");
        }

        if (!$this->modulos_model->isValidModule($data['modulo'], $data['lote'])) {
            throw new Exception("El módulo no existe en el lote indicado. Se ha cancelado la operación. Valor recibido: " . $data['modulo'] . ' en el lote' . $data['lote']);
        }

        if (!$this->personal_model->existsRecord($data['supervisor'])) {
            throw new Exception("El supervisor indicado no existe. Se ha cancelado la operación. Valor recibido: " . $data['supervisor']);
        }

        if (!$this->personal_model->existsRecord($data['trabajador'])) {
            throw new Exception("El trabajador no existe. Se ha cancelado la operación. Valor recibido: " . $data['trabajador']);
        }

        if (!$this->tareas_model->existsRecord($data['tarea'])) {
            throw new Exception("La tarea indicada no existe. Se ha cancelado la operación. Valor recibido: " . $data['tarea']);
        }

        if (!$this->subtareas_model->isValidSubtask($data['tarea'], $data['subtarea'])) {
            throw new Exception("La subtarea no existe para la tarea indicada. Se ha cancelado la operación Valor recibido: " . $data['subtarea'] . " en la tarea " . $data['tarea']);
        }

        if (!isTimeValid($data['hora'])) {
            throw new Exception("La hora de registro no es válida. Debe ser un tiempo válido. Se ha cancelado la operación. Valor recibido: " . $data['hora']);
        }

        if (!isValidDate($data['fecha'])) {
            throw new Exception("La fecha indicada no es válida. Se ha cancelado la operación. Valor recibido: " . $data['fecha']);
        }

        $totalWeight = 0;

        for ($i = 1; $i <= 15; $i++) {

            $data['saco' . $i] += 0;
            
            if($data['saco' . $i] < 0) {
                throw new Exception("El peso de los sacos no puede ser negativo. Se ha cancelado la operación. Valor recibido: " . $data['saco' .$i]);
            }

            if(!is_numeric($data['saco' . $i])) {
                throw new Exception("El peso de los sacos debe ser un número. Se ha cancelado la operación. Valor recibido: " . $data['saco' . $i]);
            }

            $totalWeight += $data['saco' . $i];
            
        }

        // if ($totalWeight == 0) {
        //     throw new Exception("El peso total de todos los sacos no puede ser cero. Se ha cancelado la operación.");
        // }

        $this->db->insert('z_cosecha_cacao', $data);

        return $this->db->insert_id();
        
    }
 
}