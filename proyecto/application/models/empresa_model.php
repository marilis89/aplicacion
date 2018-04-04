<?php
class Empresa_model extends CI_Model {
function __construct(){

   $this-> load->database();
   //   parent::__construct();
 	
  }
   
   
    function conecta_bd(){
      $query = $this->db->query('SELECT *
      FROM empresa');
      
      return $query ->result();
   }

   function conecta_bd_a(){
      $query = $this->db->query('SELECT p.id_contrato, c.fecha_vecimiento, c.valor_anual,
SUM(p.valor_pago) total
 from pago p,contrato c WHERE c.id_contrato = p.id_contrato and c.fecha_vecimiento <= NOW() 
GROUP BY p.id_contrato');
      
      return $query ->result();
   }

   function consulta_correo($id){
    $query = $this->db->query('SELECT correo from empresa where id_empresa = '.$id.'');
    return $query->result();
   }

   function guardarContratos($contrato,$producto){
    $id_contrato=0;
    $id_producto=0;

    $this->db->insert('contrato',$contrato);
      if ($this->db->affected_rows() == '1')
    {
        $id_contrato= $this->db->insert_id();
    }
    else
    {
        return FALSE;
    }

    $this->db->insert('producto',$producto);
       if ($this->db->affected_rows() == '1')
    {
        $id_producto= $this->db->insert_id();
    }
    else
    {
        return FALSE;
    }

    $this->db->query('INSERT INTO contrato_producto(id_prodcuto,id_contrato)
  VALUES ('.$id_producto.','.$id_contrato.')');

    return $id_contrato;

   // $this->db->insert('empresa', $data);

   }

   public function guardarNuevaEmpresa($empresa){
    $this->db->insert('empresa',$empresa);
      if ($this->db->affected_rows() == '1')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }

   }

   function nombreVendedor(){
    $query=$this->db->query('SELECT * from vendedor');
    return $query->result();
   }

   function guardarNuevoProducto($producto,$id_contrato){
    $id_producto=0;
    $this->db->insert('producto',$producto);
        if ($this->db->affected_rows() == '1')
    {
        $id_producto= $this->db->insert_id();
    }
    else
    {
        return FALSE;
    }
$this->db->query('INSERT INTO contrato_producto(id_prodcuto,id_contrato)
  VALUES ('.$id_producto.','.$id_contrato.')');



   }


   function updateEmpresa($empresa,$id_empresa){
    $this->db->where('id_empresa',$id_empresa);
    $this->db->update('empresa',$empresa);
      if ($this->db->affected_rows() == '1')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
   }


   function deleteEmpresa($id_empresa){
      $this->db->where('id_empresa',$id_empresa);
    $this->db->delete('empresa');
      if ($this->db->affected_rows() == '1')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
   }


}
?>