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

	$n=0;
	

	foreach ($empresa as $i) {
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
			
		
		<tr>
			<td><?php echo $n;?></td>
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

		<?php

	foreach ($empresa2 as $i) {
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
		
		<tr>
			<td><?php echo $n;?></td>
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
                
				# code...
			?>

			<form action="<?=site_url('email_controller/send_mail/')?><?php echo $g->correo;?>" method ="post">		
		
		<tr>
			<td><?php echo $n;?></td>
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
	
	?>

		
	
	  </tbody>
	</table>
	
	
	</div>
	</div>
	</div>
	</div>

	
		


	

	</body>
	</html> 