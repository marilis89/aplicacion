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
	      <th scope="col">Dias de vencimiento</th>
	      <th scope="col">Valor Anual</th>
	      <th scope="col">Valor Pendiente</th>
	      
	      <th scope="col">...</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php
	

	foreach ($empresa as $i) {
		foreach ($i->empresa as $g){
		foreach ($i->pago as $k) {

			if ($k->id_contrato == $g->id_contrato && $k->total < $k->valor_anual) {
				$debe=$k->valor_anual -$k->total;
				//$actual= new DateTime("now");
				//$fecha= $k->fecha_vecimiento->diff($actual);
				# code...
			?>

			<form action="<?=site_url('email_controller/send_mail/')?><?php echo $g->correo;?>" method ="post">
			
		
		<tr>
			<td><?php echo $g->id_empresa;?></td>
			<td><?php echo $g->nombre_empresa;?></td>
			<td><?php echo $g->correo;?></td>
			<td><?php echo $k->fecha_vecimiento;?></td>
			<td><?php ?></td>
			<td><?php echo $k->valor_anual;?></td>
			<td><?php echo $debe;?></td>

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

	}
	?>

		



	
	  </tbody>
	</table>
	
	
	</div>
	</div>
	</div>
	</div>

	
		
<<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
	console.log($empresa);
</script>

	

	</body>
	</html> 