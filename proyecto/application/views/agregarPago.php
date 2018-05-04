<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <?php $this->load->view("estilos/estilo"); ?>

    


  <div class="col-lg-9">

 <div class="card mt-4">

 	<center><h1>Agregar Pago</h1></center>
 	<div class="container">

 		<form action="<?= site_url('pago_controlador/insertar_pago_empresa');?>" method="post">
 			<div class="form-group">
 				<label for="inputNombre" class="col-sm-3 col-form-label">Empresa</label>
 				<select name="inputEmpresa" class="form-control">       
 					<?php 
 					foreach ($empresa as $g) 

 				          # code...
 						echo '<option value= '.$g->id_contrato.'>' .$g->nombre_empresa.'</option>'                  
 					?>              
 				</select>
 			</div>
 			<br>


 			<div class="form-row">

 				<div class="form-group col-md-4">
 					<label>Valor Pago</label>
 					<div class="input-group">
 						<span class="input-group-addon">$</span>
 						<input type="text" class="form-control" name="valor" value="<?php echo set_value('valor_pago')?>">
 					</div>
 				</div>
 				<div class="form-group col-md-4">
 					<label>Estado</label>
 					<select name="estado" class="form-control" type="text">
 						<option>Pendiente</option>
 						<option>Cancelado</option>
 					</select>
 				</div>
 			</div>
 	              
 			<br>    
 			<center><button type="submit" class="btn btn-primary">Guardar</button></center>    
 		</form>
 	</div>

 </div>

</div>
</div>


</body>
</html>