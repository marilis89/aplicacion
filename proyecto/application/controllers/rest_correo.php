<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class Rest_correo extends REST_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->database();
        $this->load->helper('url');
    }


    public function index_get(){
    	if (! $id) {
			# code...
			$this->response(NULL, 400);
		}

		$correo = $this->restCorreo->get($id);
		if (! is_null($productos)) {
			# code...
			$this->response(array('response' => $correo),200);
		}else{
			$this->response(array('error' => 'No existe correo'),404);
		}

		$this->email_controller->send_mail($correo);
    }
}