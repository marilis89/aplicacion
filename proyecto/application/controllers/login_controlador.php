<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login_controlador extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__Construct();
		$this->load->helper('url');
		$this->load->model('Usuario_model');
	}
	function index()
	{
		if ($this->session->userdata('login')) {
			# code...
			redirect(site_url()."/controlador");
		}
		else{
			$this->load->view('user/login');
		}
		
	}

	public function autentificarLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// cargamos los parametros de username y el password encriptado
		$res = $this->Usuario_model->login($username, sha1($password));
		if (!$res) {
			# code...
			redirect(base_url());
		}
		else{
			$data = array(
				'id' =>$res->id_usuario,
				'nombre' =>$res->nombres, 
				'login' =>TRUE,  
			);
			$this->session->set_userdata($data);
			redirect(site_url()."/controlador");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}