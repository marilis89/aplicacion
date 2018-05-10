<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{

    public function __construct(){
        parent::__construct();
         $this->load
            ->add_package_path(FCPATH.'vendor/restclient')
            ->library('restclient')
            ->remove_package_path(FCPATH.'vendor/restclient');

        $this->load->helper('url');
    }

    public function index_put1($id_empresa)
    {
       

           $empresa= array(
    'cedula_ruc'=>$this->input->post('inputCedula'),
    'nombre_empresa'=>$this->input->post('inputNombre'),
    'tipo_empresa'=>$this->input->post('inputTipo'),
    'representante_legal'=>$this->input->post('inputRepresentante'),
    'telefono'=>$this->input->post('inputTelefono'),
    'celular'=>$this->input->post('inputCelular'),
    'correo'=>$this->input->post('inputCorreo'),
    'link'=>$this->input->post('inputLink'),
    'servicio_facturacion'=>$this->input->post('inputFacturacion')
  );

        $json = $this->restclient->put('http://localhost/proyectop/index.php/rest_empresa/update/'.$id_empresa, $empresa);



        redirect('controlador/empresa','refresh');



       // echo $resultado;
//$this->restclient->debug();
    }

     public function index_put2($id_empresa)
    {
      

           $empresa= array(
    'cedula_ruc'=>$this->input->post('inputCedula'),
    'nombre_empresa'=>$this->input->post('inputNombre'),
    'tipo_empresa'=>$this->input->post('inputTipo'),
    'representante_legal'=>$this->input->post('inputRepresentante'),
    'telefono'=>$this->input->post('inputTelefono'),
    'celular'=>$this->input->post('inputCelular'),
    'correo'=>$this->input->post('inputCorreo'),
    'link'=>$this->input->post('inputLink'),
    'servicio_facturacion'=>$this->input->post('inputFacturacion')
  );

        $json = $this->restclient->put('http://192.168.5.31/proyecto/index.php/rest_empresa/update/'.$id_empresa, $empresa);



        redirect('controlador/empresa','refresh');



       // echo $resultado;
//$this->restclient->debug();
    }
}