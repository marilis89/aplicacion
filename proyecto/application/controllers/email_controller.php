<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email_controller extends CI_Controller {

    function __construct() {
        parent::__Construct();
        
        $this->load->helper(array('url','html'));
       }


    function send_mail($correo){
       //cargamos la libreria email de ci
     $this->load->library("email");

 //configuracion para gmail
     $configGmail = array(
       'protocol' => 'smtp',
       'smtp_host' => 'ssl://smtp.gmail.com',
       'smtp_port' => 25,
       'smtp_user' => 'vmarisela2@gmail.com',
       'smtp_pass' => 'Lis89ro2',
       'mailtype' => 'html',
       'charset' => 'utf-8',
       'newline' => '\r\n'
     );

     $this->email->initialize($configGmail);
 
     $this->email->from('vmarisela2@gmail.com');
     $this->email->to("vmarisela2@gmail.com");
     $this->email->subject('Bienvenido/a ');
     $this->email->message('<h2>Email enviado con codeigniter haciendo uso del smtp de gmail</h2><hr><br> Bienvenido al blog');
     $this->email->send();
 //con esto podemos ver el resultado
     var_dump($this->email->print_debugger());
   }


} 

   