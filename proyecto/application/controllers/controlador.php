<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

  var $API="";

     public function __construct(){
        parent::__construct();
       $this->API ='http://localhost/proyecto/index.php';
       $this->load->library('session');
       $this->load->model('Empresa_model');
       $this->load->helper('url');
       
     //  $this->load->library('form_validation');
    }

   public function index(){

    
      $nombre['vendedor']=$this-> Empresa_model -> nombreVendedor();

   /*   foreach ($nombre as $i) {
        foreach ($i->empresa as $g) {
          foreach ($i->pago as $k) {

            if ($k->id_contrato == $g->id_contrato && $k->total < $k->valor_anual) {
              $this->site_url('email_controller/send_mail/$g->correo');
            }
            
          }
          
        }
        
      }*/

      
     $this->load->view('form_empresa', $nombre);
    // redirect(base_url());
      
   }

   public function empresa(){
    $empresa['empresa3']= json_decode($this-> curl->simple_get('http://localhost/proyecto/index.php/rest_empresa/index_get') );
    $empresa['empresa2']= json_decode($this-> curl->simple_get('http://localhost/proyectorest/index.php/rest_empresa/index_get') );
    $empresa['empresa']= json_decode($this-> curl->simple_get($this->API.'/rest_empresa/index_get'));
    $this->load->view('listaEmpresa',$empresa);
   }


    public function menu(){

      $empresa['empresa']= json_decode($this-> curl->simple_get($this->API.'/rest_empresa/index_get') );

    // $empresa['empresa'] = $this-> Empresa_model -> conecta_bd();
   // $empresa['pago'] = $this-> Empresa_model -> conecta_bd_a();
      $this->load->view('vendedores', $empresa);
    }

    public function guardarContrato(){

      //$this->load->helper('form');


        $nombre = $this->input->post('inputNombre');
        $cedula = $this->input->post('inputCedula');  
         $tipo = $this->input->post('inputTipo');
        $representante = $this->input->post('inputRepresentante'); 
         $telefono = $this->input->post('inputTelefono');
        $celular = $this->input->post('inputCelular');
         $correo = $this->input->post('inputCorreo');
        $link = $this->input->post('inputLink');
         $facturacion = $this->input->post('inputFacturacion');

    $producto = array
    (
        'nombre_producto' => $this->input->post('inputProducto'),
        'valor_producto' => $this->input->post('inputValor'), 
         'abono_producto' => $this->input->post('inputAbono') ,
        'firmante' => $this->input->post('inputFirmante')
      );
    

        $contrato = array
      (
        'id_vendedor' => $this->input->post('inputVendedor') ,
        'fecha_contrato' => $this->input->post('inputFecCon') ,  
         'fecha_vecimiento' => $this->input->post('inputFecVen') ,
        'valor_anual' => $this->input->post('inputValorA')
      );

      

     // $this->load-> model('Empresa_model');
    $id_contrato= $this-> Empresa_model->guardarContratos($contrato,$producto);
    $this->guardarEmpresa($id_contrato,$nombre,$cedula,$tipo,$representante,$telefono,$celular,$correo,$link,$facturacion);


    // $this->load ->view('form_empresa');

    }
 public function guardarEmpresa($id_contrato,$nombre,$cedula,$tipo,$representante,$telefono,$celular,$correo,$link,$facturacion){

  $empresa= array(
    'id_contrato'=>$id_contrato,
    'cedula_ruc'=>$cedula,
    'nombre_empresa'=>$nombre,
    'tipo_empresa'=>$tipo,
    'representante_legal'=>$representante,
    'telefono'=>$telefono,
    'celular'=>$celular,
    'correo'=>$correo,
    'link'=>$link,
    'servicio_facturacion'=>$facturacion
  );

  $this-> Empresa_model->guardarNuevaEmpresa($empresa);

  $data['empresa']=$this-> Empresa_model -> conecta_bd();
  $this->load->view('listaEmpresa',$data);




 }


 public function actualizarEmpresa($id_empresa){
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

  $mensaje=$this-> Empresa_model->updateEmpresa($empresa,$id_empresa);

  if($mensaje = TRUE){
    $data['empresa']=$this-> Empresa_model -> conecta_bd();
  $this->load->view('listaEmpresa',$data);
  }
 }

 public function eliminarEmpresa($id_empresa){
  $mensaje=$this->Empresa_model->deleteEmpresa($id_empresa);
  if($mensaje = TRUE){
    $data['empresa']=$this-> Empresa_model -> conecta_bd();
  $this->load->view('listaEmpresa',$data);
  }
 }



 
}
