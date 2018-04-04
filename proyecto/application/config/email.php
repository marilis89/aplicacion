<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'ssl://smtp.googlemail.com';
         
       //Nuestro usuario
        $config["smtp_user"] = 'vmarisela2@gmail.com';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'Lis89ro2';    
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '25';

        $config["smtp_timeout"]= '6';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido  
       $config['validate'] = true;
       $config['newline']= '\r\n';


       function send_mail($correo){
           $email->IsSMTP(); // establecemos que utilizaremos SMTP
        $email->SMTPAuth   = true; // habilitamos la autenticación SMTP
  
        $email->From = "vmarisela2@gmail.com";
        $email->FromName = "Mary Valle";
       // $mail->setFrom('vmarisela2@gmail.com', 'Mary Valle');  //Quien envía el correo
        $email->AddReplyTo("vmarisela2@gmail.com","Lore");  //A quien debe ir dirigida la respuesta
        $email->Subject    = "Asunto del correo";  //Asunto del mensaje
        $email->Body      = "Cuerpo en HTML<br />";
        $email->AltBody    = "Cuerpo en texto plano";
        $destino = $correo;
        $email->AddAddress($destino, "Juan Palotes");

       // $mail->AddAttachment("images/phpmailer.gif");      // añadimos archivos adjuntos si es necesario
       // $mail->AddAttachment("images/phpmailer_mini.gif"); // tantos como queramos

        if($this->$email->send()) {
          $this->session->set_flashdata('envio','Email enviado');

          //  $data['message'] = "Error en el envío: " . $email->ErrorInfo;
        } else {
          $this->session->set_flashdata('envio','No se ha enviado');
           // $data['message'] = "¡Mensaje enviado correctamente!";
        }
       }



       ?>