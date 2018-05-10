<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_controller extends CI_Controller {

    function __construct() {
        parent::__Construct();
        
        $this->load->helper(array('url','html'));
       }


    function send_mail($correo){
      $this->load->library('email');
          $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
        $this->email->from('vmarisela2@gmail.com', 'Victor Robles');
         
      /*
       * Ponemos el o los destinatarios para los que va el email
       * en este caso al ser un formulario de contacto te lo enviarás a ti
       * mismo
       */
        $this->email->to('vmarisela2@gmail.com', 'Víctor Robles');
         
      //Definimos el asunto del mensaje
        $this->email->subject("hola");
         
      //Definimos el mensaje a enviar
        $this->email->message(
                "Email: ".$correo.
                " Mensaje: hola"
                );
         
        //Enviamos el email y si se produce bien o mal que avise con una flasdata
        if($this->email->send()){
         
           return $this->session->set_flashdata('envio', 'Email enviado correctamente');
        }else{
        
           return $this->session->set_flashdata('envio', 'No se a enviado el email');
        }
       }


    } 

    ?>