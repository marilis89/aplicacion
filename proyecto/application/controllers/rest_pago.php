<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Rest_pago extends REST_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Empresa_model');
       
    }


    public function index_get(){

    	//llamando al modelo para consultar en base de datos 1

    	$empresa['empresa'] = $this-> Empresa_model -> consulta_empresa();
        $empresa['pago'] = $this-> Empresa_model -> consulta_pago();

    //llamando al modelo para consultar en base de datos 2

 //$empresa['empresa1'] = $this-> Baseprueba_model -> consultaEmpresas();
   //$empresa['pago1'] = $this-> Baseprueba_model -> consultaPagos();


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