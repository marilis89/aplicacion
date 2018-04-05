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



       ?>