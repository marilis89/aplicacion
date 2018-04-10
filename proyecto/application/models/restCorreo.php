<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 

*/
class Model_restdetallecarrito extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get($id)
	{
		# code...

		if (! is_null($id)) {
			# code...
			$query = $this->db->select('correo')->from('empresa')->where('id_empresa',$id)->get();
			if ($query->num_rows() === 1) {
				# code...
				return $query->row_array();
			}

			return NULL;
		}

	}
}