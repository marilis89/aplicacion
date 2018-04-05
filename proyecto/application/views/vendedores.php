<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
	<html>
	

	
	<body>

		 <?php $this->load->view("estilos/estilo"); ?>

		  <div class="col-lg-9">

 <div class="card mt-4">

<div class="container">

	<center><h1>Lista de deudores</h1></center>


	
	<div class="form-group">

		<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Empresa</th>
	      <th scope="col">Correo</th>
	      <th scope="col">Fecha vencimiento</th>
	      <th scope="col">Valor Pago</th>
	      
	      <th scope="col">...</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php

	foreach ($empresa as $g) {
		foreach ($pago as $k) {

			if ($k->id_contrato == $g->id_contrato && $k->total < $k->valor_anual) {
				# code...
			?>

			<form action="<?=site_url('email_controller/send_mail/')?><?php echo $g->correo;?>" method ="post">
			
		
		<tr>
			<td><?php echo $g->id_empresa;?></td>
			<td><?php echo $g->nombre_empresa;?></td>
			<td><?php echo $g->correo;?></td>
			<td><?php echo $k->fecha_vecimiento;?></td>
			<td><?php echo $k->total;?></td>

			<td><input type="submit" name="submit" value="Enviar Correo"/></td>


			

		</tr>
		</form>
		
		<?php
		if ($this->session->flashdata('envio')){
			echo $this->session->flashdata('envio');
		}
		}
		}

	}
	?>

		



	
	  </tbody>
	</table>
	
	
	</div>
	</div>
	</div>
	</div>

	
		


	

	</body>
	</html> 