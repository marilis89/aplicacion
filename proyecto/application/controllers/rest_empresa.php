<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Rest_empresa extends REST_Controller {

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



    public function index_put($data,$id)
    {
        

        # code...
        if ((! $this->put('empresa'))|| (! $id)) {
            # code...
            $this->response(NULL, 400);
        }

        $empresa = $this-> Empresa_model->updateEmpresa($data,$id);

        if (! is_null($empresa)) {
            # code...
            $this->response(array('response' => 'Empresa Actualizada'),200);
        }else{
            $this->response(array('error' => 'Ha ocurrido un error en el servidor'),400);
        }
    }

}