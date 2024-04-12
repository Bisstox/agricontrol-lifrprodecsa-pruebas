<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class V1 extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        
        
    }

    public function index_get() {
        $this->response( "Deprecated", 200 );
    }

}