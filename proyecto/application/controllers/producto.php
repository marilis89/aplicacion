<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

 public function __construct(){
  parent::__construct();

  $this->load->library('session');
  $this->load->model('Empresa_model');
  $this->load->helper('url');
 
     //  $this->load->library('form_validation');
}

public function index(){

 $this->load->view('agregarProducto');
    // redirect(base_url());

}

public function guardarNuevoProducto(){

   $producto = array
    (
        'nombre_producto' => $this->input->post('inputProducto'),
        'valor_producto' => $this->input->post('inputValor')
      );

    

 $id= $this-> Empresa_model -> guardarNuevoProducto($producto);


 $this->load->view('agregarProducto');
  
  
}



}
