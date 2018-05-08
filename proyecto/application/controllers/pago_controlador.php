<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Pago_controlador extends CI_Controller
{
	  var $API="";
	
	public function __construct()
	{
		# code...
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Empresa_model');
		$this->API ='http://localhost/proyecto/index.php';
		
	}
	
	public function index(){

		
      	//cargo el modelo

      	//$empresa['empresa3']= json_decode($this-> curl->simple_get('http://192.168.5.31/proyecto/index.php/rest_correo/index_get') );
    $empresa['empresa2']= json_decode($this-> curl->simple_get('http://localhost/proyectorest/index.php/rest_empresa/index_get') );
    $empresa['empresa']= json_decode($this-> curl->simple_get($this->API.'/rest_empresa/index_get'));
   		
		//$empresa['empresa'] = $this-> Empresa_model -> conecta_bd();
		//$empresa['pago'] = $this-> Empresa_model -> pago();

		$this->load->view( 'list_pago', $empresa);


	
	}

	public function insertar_pago_empresa(){


       		/*$this->form_validation->set_rules('id_contrato','id_contrato','required|trim|xss_clean');
			$this->form_validation->set_rules('valor_pago','valor_pago','required|trim|xss_clean');
			$this->form_validation->set_rules('estado','estado','required|trim|xss_clean');

			$this->form_validation->set_message('required','Campo %s obligatorio');
			$this->form_validation->set_message('required','Campo %s obligatorio');
			$this->form_validation->set_message('required','Campo %s obligatorio');
			
			if (!$this->form_validation->run()) {

				# code...
				$this->index();.
			}
			else{ */

				$data = array(
					'id_contrato' =>  $this->input->post('inputId'),
					'valor_pago' => $this->input->post('valor'),
					'estado' => $this->input->post('estado'));

				$this-> Empresa_model->ingreso_pago($data);
				  $empresa['empresa2']= json_decode($this-> curl->simple_get('http://localhost/proyectorest/index.php/rest_empresa/index_get') );
				  $empresa['empresa']= json_decode($this-> curl->simple_get($this->API.'/rest_empresa/index_get'));

			   //$data['message'] = 'Data Inserted Successfully';
				$this->load->view('list_pago', $empresa);

			//}
			
	}

	public function buscar(){

		if ($this->input->get('keyword') !== FALSE) {
			$data ['results'] = $this->m->searchMessages($this->input->get('keyword'));
			$data['search_passed'] = TRUE;
			$data['search_value'] = $this->input->get('keyword');
		} else {
			$data['search_passed'] = FALSE;
			$data['results'] = array();
		}

		$this->load->view("list_pago", $data);
	
	}
}


   