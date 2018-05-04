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

 $empresa['empresa'] = $this-> Empresa_model -> consulta_empresa();


 $this->load->view('agregarProducto',$empresa);
    // redirect(base_url());

}

public function guardarNuevoProducto(){

   $producto = array
    (
        'nombre_producto' => $this->input->post('inputProducto'),
        'valor_producto' => $this->input->post('inputValor'), 
         'abono_producto' => $this->input->post('inputAbono') ,
        'firmante' => $this->input->post('inputFirmante')
      );

    $id_contrato= $this->input->post('inputContrato');

 $id= $this-> Empresa_model -> guardarNuevoProducto($producto,$id_contrato);
  $empresa['empresa'] = $this-> Empresa_model -> consulta_empresa();

 $this->load->view('agregarProducto', $empresa);
  
  
}



}
