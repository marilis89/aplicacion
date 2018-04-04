<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

	
	<body>


   

        <?php $this->load->view("estilos/estilo"); ?>






  <div class="col-lg-9">

 <div class="card mt-4">

  <center><h1>Formulario Nuevo Contrato</h1></center>
  <div class="container">

		<form action="<?=site_url('controlador/guardarContrato');?>" method="post">

 

      <div class="card mt-4">
        <div class="container">
           <br>
			  
    
    
    <div class="form-group row">
      <label for="inputNombre" class="col-sm-3 col-form-label">Nombre: </label>
      <div class="col-sm-5">
      <input type="text" class="form-control"  required="" name="inputNombre" placeholder="Nombre" required="">
    </div>
    </div>
    
    
    
    <div class="form-group row">
      <label for="inputCedula" class="col-sm-3 col-form-label">Cedula/RUC:</label>
      <div class="col-sm-5">

      <input type="text" class="form-control" name="inputCedula" placeholder="Cedula" required="">
    </div>
  </div>
    
  
    
    <div class="form-group row">
      <label for="inputRepresentante" class="col-sm-3 col-form-label">Representante Legal:</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" name="inputRepresentante" placeholder="Representante" required="">
    </div>
   </div>
  
      
  
     <div class="form-group row">
    
    <label for="inputTipo" class="col-sm-3 col-form-label">Tipo empresa</label>
    <div class="col-sm-5">
    <select name="inputTipo" class="form-control">
        <option selected>Elegir...</option>
        <option value="natural">Natural</option>
        <option value="juridica">Juridica</option>
      </select>
  </div>
</div>
    <div class="form-group row">
      <label for="inputTelefono" class="col-sm-3 col-form-label">Telefono</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="inputTelefono" placeholder="Telefono" required="">
       </div>
    </div>
  
     <div class="form-group row">
      <label for="inputCelular" class="col-sm-3 col-form-label">Celular</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" name="inputCelular" placeholder="Celular" required="">
    </div>
  </div>

     <div class="form-group row">

    <label for="inputCorreo" class="col-sm-3 col-form-label">Correo</label>
    <div class="col-sm-5">
    <input type="email" class="form-control" name="inputCorreo" placeholder="Correo" required="">
  </div>
</div>

   
    <div class="form-group row">
      <label for="inputLink" class="col-sm-3 col-form-label">Link</label>
       <div class="col-sm-5">
         <input type="text" class="form-control" name="inputLink" placeholder="Link">
    </div>
  </div>
    <div class="form-group row">
      <label for="inputFacturacion" class="col-sm-3 col-form-label">Facturación</label>
      <div class="col-sm-5">
      <select name="inputFacturacion" class="form-control">
        <option selected>Elegir...</option>
        <option value="si">SI</option>
        <option value="no">NO</option>
      </select>
    </div>
    </div>
  </div>
</div>


<div class="card mt-4">
  <div class="container">
     <br>

   <div class="form-group row">
    <label for="inputProducto" class="col-sm-3 col-form-label">Nombre Producto</label>
    <div class="col-sm-5">
     <input type="text" class="form-control" name="inputProducto" placeholder="" required="">
  </div>
</div>
  <div class="form-group row">
    <label for="inputFirmante" class="col-sm-3 col-form-label">Firmante</label>
     <div class="col-sm-5">
     <input type="text" class="form-control" name="inputFirmante" placeholder="" required="">
  </div>
</div>

   
    <div class="form-group row">
      <label for="inputValor" class="col-sm-3 col-form-label">Valor Producto</label>
<div class="col-sm-5">
         <input type="text" class="form-control" name="inputValor" placeholder="" required="">
         </div>
    </div>
    
    <div class="form-group row">
      <label for="inputAbono" class="col-sm-3 col-form-label">Abono</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" name="inputAbono" placeholder="" required="">
    </div>
    </div>
  </div>
</div>


<div class="card mt-4">
  <div class="container">
 <br>

    
 
    <div class="form-group row">
      <label for="inputFecCon" class="col-sm-3 col-form-label">Fecha Contrato</label>
      <div class="col-sm-5">
         <input type="date" class="form-control" name="inputFecCon" placeholder="">
       </div>
    </div>
    

    <div class="form-group row">
      <label for="inputFecVen" class="col-sm-3 col-form-label">Fecha Vencimiento</label>
      <div class="col-sm-5">
      <input type="date" class="form-control" name="inputFecVen" placeholder="">
    </div>
    </div>
 

      <div class="form-group row">
    <label for="inputVendedor" class="col-sm-3 col-form-label">Vendedor</label>
    <div class="col-sm-5">
    <select name="inputVendedor" class="form-control">
      <option selected>Elegir...</option>
      <?php 
      foreach ($vendedor as $k) 

        echo ' <option value='.$k->id_vendedor.'>'.$k->nombre_vendedor.'</option>'
        # code...
      
      ?>
        
      </select>
    </div>
  </div>
 

  <div class="form-group row">
      <label for="inputValorA" class="col-sm-3 col-form-label">Valor Licencia</label>
 <div class="col-sm-5">
         <input type="text" class="form-control" name="inputValorA" placeholder="">
         </div>
    </div>
    
  </div>

</div>
<br>
<br>


  
  <center><button type="submit" class="btn btn-primary">Guardar</button></center>

</form>
</div>
</div>
</div>
 </div>
</div>


		
	

	
	</body>
	</html> 