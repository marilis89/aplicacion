<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Rest_correo extends REST_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Empresa_model');
    }


    public function index_get(){

    	//llamando al modelo para consultar en base de datos

    	 $empresa['empresa'] = $this-> Empresa_model -> conecta_bd();
    $empresa['pago'] = $this-> Empresa_model -> conecta_bd_a();
    	

// transformando datos a json
		
		if (! is_null($empresa)) {
			# code...
			$this->response(array('response' => $empresa),200);
			//$this->load->view('vendedores', $empresa);
		}else{
			$this->response(array('error' => 'No existe correo'),404);
		}

		 
    }
}