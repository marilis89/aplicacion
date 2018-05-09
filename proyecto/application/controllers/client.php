<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller
{
    public function index_put($id_empresa)
    {
        $this->load
            ->add_package_path(FCPATH.'vendor/restclient')
            ->library('restclient')
            ->remove_package_path(FCPATH.'vendor/restclient');

        $this->load->helper('url');

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

        $json = $this->restclient->put(site_url('http://localhost/proyectop/index.php/rest_actualizar/index_put/')+$id_empresa, $empresa);

        $this->restclient->debug();
    }
}