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
	      <th scope="col">Fecha contrato</th>
	      <th scope="col">Fecha vencimiento</th>
	      <th scope="col">Dias para vencer</th>
	      <th scope="col">Valor Anual</th>
	      <th scope="col">Valor Pendiente</th>
	      
	      <th scope="col">...</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php
	

	foreach ($empresa as $i) {
		//echo $empresa;
		foreach ($i->empresa as $g){
			foreach ($i->pago as $k) {
			

			if ($k->id_contrato == $g->id_contrato && $k->total < $k->valor_anual) {
				$debe=$k->valor_anual -$k->total;
				$actual=date('Y-m-d');
				$dias = (strtotime($actual)-strtotime($k->fecha_vecimiento))/86400;
                $dias = abs($dias); $dias = floor($dias);
<<<<<<< HEAD
                if($dias <= 31){
=======
                if ($dias<=31){
>>>>>>> ee6f33a7a4c2b2cae2d432d173e7f391dcb4f2c9
				# code...
			?>

			<form action="<?=site_url('email_controller/send_mail/')?><?php echo $g->correo;?>" method ="post">
			
		
		<tr>
			<td><?php echo $g->id_empresa;?></td>
			<td><?php echo $g->nombre_empresa;?></td>
			<td><?php echo $k->fecha_contrato;?></td>
			<td><?php echo $k->fecha_vecimiento;?></td>
			<td><?php echo $dias;?></td>
			<td><?php echo $k->valor_anual;?></td>
			<td><?php echo $debe;?></td>

			<td><input type="image" src="<?=base_url('img/correo.jpg')?>" width="20" height="20" name="submit" value="Enviar Correo"/></td>


		</tr>
		</form>
		
		<?php
		if ($this->session->flashdata('envio')){
			echo $this->session->flashdata('envio');
		}
		}
		}
		}
		}
		

	}
	?>

<<<<<<< HEAD
	<?php

	foreach ($empresa3 as $i) {
		//echo $empresa;
		foreach ($i->empresa as $g){
			foreach ($i->pago as $k) {
				
			if ($k->id_contrato == $g->id_contrato && $k->total < $k->valor_anual) {
				$n++;
				$debe=$k->valor_anual -$k->total;
				$actual=date('Y-m-d');
				$dias = (strtotime($actual)-strtotime($k->fecha_vecimiento))/86400;
                $dias = abs($dias); $dias = floor($dias);
                if($dias <= 30){
                
				# code...
			?>

			<form action="<?=site_url('email_controller/send_mail/')?><?php echo $g->correo;?>" method ="post">		
=======
>>>>>>> ee6f33a7a4c2b2cae2d432d173e7f391dcb4f2c9
		



<<<<<<< HEAD
		</tr>
		</form>
		
		<?php
		if ($this->session->flashdata('envio')){
			echo $this->session->flashdata('envio');
		}
		}
		}
		}
	}
}
	
	?>

		
=======
>>>>>>> ee6f33a7a4c2b2cae2d432d173e7f391dcb4f2c9
	
	  </tbody>
	</table>
	
	
	</div>
	</div>
	</div>
	</div>

	
		


	

	</body>
	</html> 