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

	public function get()
	{
		# code...

			# code...
			$query = $this->db->select('*')->from('empresa')->get();
			if ($query->num_rows() === 1) {
				# code...
				return $query->row_array();
			}

			return NULL;
	

	}
}