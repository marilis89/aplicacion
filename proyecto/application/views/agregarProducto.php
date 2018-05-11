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

  <div class="form-group row">
      <label for="inputCelular" class="col-sm-3 col-form-label">Nombre Producto:</label>
      <div class="col-sm-5">
      <input type="text" class="form-control" name="inputProducto" placeholder="" required="">
    </div>
    </div>
   
  <div class="form-group row">
      <label for="inputTelefono" class="col-sm-3 col-form-label" >Valor:</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" name="inputValor" placeholder="" required="">
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