<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Usuario_model extends CI_Model
{
	
	public function login($username, $password)
   {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $resultados = $this->db->get('usuario');
        if ($resultados->num_rows() > 0) {
          # code...
          return $resultados->row();
        }
        else{
          return false;
        }
   }
}