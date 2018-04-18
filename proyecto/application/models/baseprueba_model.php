<?php
class Baseprueba_model extends CI_Model {
function __construct(){

   $this->db_b=$this->load->database('prueba', TRUE);
   $this->db_c=$this->load->database('prueba2', TRUE);
   
  // parent::__construct();
 	
  }
   
   
    function consultaEmpresas2(){

       
      $query = $this->db_b->query('SELECT *
      FROM empresa');
      
      return $query->result();
   }

   function consultaPagos2(){
    
      $query = $this->db_b->query('SELECT p.id_contrato, c.fecha_vecimiento, c.valor_anual, c.fecha_contrato,
SUM(p.valor_pago) total
 from pago p,contrato c WHERE c.id_contrato = p.id_contrato and c.fecha_vecimiento >= NOW() 
GROUP BY p.id_contrato');
      
      return $query ->result();
   }

    function consultaEmpresas3(){

       
      $query = $this->db_c->query('SELECT *
      FROM empresa');
      
      return $query->result();
   }

   function consultaPagos3(){
    
      $query = $this->db_c->query('SELECT p.id_contrato, c.fecha_vecimiento, c.valor_anual, c.fecha_contrato,
SUM(p.valor_pago) total
 from pago p,contrato c WHERE c.id_contrato = p.id_contrato and c.fecha_vecimiento >= NOW() 
GROUP BY p.id_contrato');
      
      return $query ->result();
   }

  
   


  


}
?>