<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Prueba extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent:: __construct();
	}
	function empresa_prueba(){
		$db_prueba = $this->load->database('prueba', TRUE);
	}


}






 ?>