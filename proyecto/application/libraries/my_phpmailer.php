<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_PHPMailer {
public function My_PHPMailer()
{
    require_once('PHPMailer/_lib/class.phpmailer.php');
    require_once('PHPMailer/_lib/class.smtp.php');
}
}
?>