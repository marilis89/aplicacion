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
     $empresa['pago'] = $this-> Empresa_model -> consulta_deudores();


// transformando datos a json
		
		if (! is_null($empresa)) {
			# code...
			$this->response(array('response' => $empresa),200);
			//$this->load->view('vendedores', $empresa);
		}else{
			$this->response(array('error' => 'No existe correo'),404);
		}

		 
    }


        public function update_put($id)
    {
        # code...
        if ((! $this->put())|| (! $id)) {
            # code...
            $this->response(NULL, 400);
        }

        $empresa = $this-> Empresa_model->updateEmpresa($id,$this->put());

        echo $empresa;

        if (! is_null($empresa)) {
            # code...
            $this->response(array('response' => 'Empresa Actualizado'),200);
        }else{
            $this->response(array('error' => 'Ha ocurrido un error en el servidor'),400);
        }
    }

    

}