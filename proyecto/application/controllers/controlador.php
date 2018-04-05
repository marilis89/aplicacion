<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

     public function __construct(){
        parent::__construct();
       
       $this->load->library('session');
       $this->load->model('Empresa_model');
       $this->load->helper('url');
     //  $this->load->library('form_validation');
    }

   public function index(){

    
      $nombre['vendedor']=$this-> Empresa_model -> nombreVendedor();

      
     $this->load->view('form_empresa', $nombre);
    // redirect(base_url());
      
   }

   public function empresa(){
    $empresa['empresa'] = $this-> Empresa_model -> conecta_bd();
    $this->load->view('listaEmpresa',$empresa);
   }


    public function menu(){

     $empresa['empresa'] = $this-> Empresa_model -> conecta_bd();
    $empresa['pago'] = $this-> Empresa_model -> conecta_bd_a();
      $this->load->view('vendedores', $empresa);
    }

    public function guardarContrato(){

      //$this->load->helper('form');

                                        //name del campo, titulo, restricciones
      $this->form_validation->set_rules('inputNombre', 'Nombre', 'required|min_length[3]|alpha|trim');
       $this->form_validation->set_rules('inputCedula', 'Cedula', 'required|numeric');
       $this->form_validation->set_rules('inputRepresentante', 'Representante Legal', 'required|min_length[3]|alpha|trim');
       $this->form_validation->set_rules('inputTelefono', 'Telefono', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email|trim');
      $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]');
             
            //Mensajes
            // %s es el nombre del campo que ha fallado
            $this->form_validation->set_message('required','El campo %s es obligatorio'); 
            $this->form_validation->set_message('alpha','El campo %s debe estar compuesto solo por letras');
            $this->form_validation->set_message('min_length[3]','El campo %s debe tener mas de 3 caracteres');
            $this->form_validation->set_message('valid_email','El campo %s debe ser un email correcto');
             
             if($this->form_validation->run()!=false){ //Si la validación es correcta
                $datos["mensaje"]="Validación correcta";
             }else{
                $datos["mensaje"]="Validación incorrecta";
             }

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
