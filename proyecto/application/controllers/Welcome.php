<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->models('empresa_model');
		

		$vendedores = $this->Empresa_model->consultav();
      
      //creo el array con datos de configuración para la vista
      $datos_vista = array('rs' => $vendedores);
      
      //cargo la vista pasando los datos de configuacion
      $this->load->view('welcome_message', $datos_vista);

	}
}
