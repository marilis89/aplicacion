<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>

	
	<body>


   

        <?php $this->load->view("estilos/estilo"); ?>






  <div class="col-lg-9">

 <div class="card mt-4">

  <center><h1>Agregar Producto</h1></center>
  <div class="container">

		<form action="<?=site_url('producto/guardarNuevoProducto');?>" method="post">

      <div class="card mt-4">
        <div class="container">
           <br>
  
  <div class="form-group">
    <label for="inputEmpresa">Nombre Empresa</label>
   <select name="inputContrato" class="form-control">
      <option selected>Elegir...</option>
      <?php 
      foreach ($empresa as $k) 

        echo ' <option value='.$k->id_contrato.'>'.$k->nombre_empresa.'</option>'
        # code...
      
      ?>
        
      </select>
  </div>

  <div class="form-group">
      <label for="inputCelular">Nombre Producto</label>
      <input type="text" class="form-control" name="inputProducto" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputCelular">Firmante</label>
      <input type="text" class="form-control" name="inputFirmante" placeholder="">
    </div>
  <div class="form-row">
    
    <div class="form-group col-md-4">
      <label for="inputTelefono">Valor</label>
         <input type="text" class="form-control" name="inputValor" placeholder="">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCelular">Abono</label>
      <input type="text" class="form-control" name="inputAbono" placeholder="">
    </div>
  </div>

 
    
    
  </div>
</div>
<br>
</div>

  <center><button type="submit" class="btn btn-primary">Guardar</button></center>

</form>
</div>

</div>

</div>
 </div>


		
	

	
	</body>
	</html> 