<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
	<html>
	

	
	<body>

		 <?php $this->load->view("estilos/estilo"); ?>

		  <div class="col-lg-9">

 <div class="card mt-4">

<div class="container">

	


	
	<div class="form-group" id="tabla">
		<center><h1>Lista de Empresa</h1></center>

		<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Cedula/RUC</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Correo</th>
	      <th scope="col">Link</th>
	      <th scope="col">...</th>
	      <th scope="col">...</th>
	    </tr>
	  </thead>
	  <tbody>
	<?php

$n=0;

	foreach ($empresa as $i) {
		foreach ($i->empresa as $g) {
     
      $n++;
   
				# code...
			?>

			
			
		
		<tr>
			<td><?php echo $n;?></td>
			<td><?php echo $g->cedula_ruc;?></td>
			<td><?php echo $g->nombre_empresa;?></td>
			<td><?php echo $g->correo;?></td>
			<td><?php echo $g->link;?></td>
			<td><input type="image" src="<?=base_url('img/editar.png')?>" width="25" height="25" onclick="actualizar(<?php echo $g->id_empresa;?>)"></td>

			<td><input type="image" src="<?=base_url('img/delete.png')?>" width="25" height="25" onclick= "eliminar(<?php echo $g->id_empresa;?>)"></td>


			

		</tr>
	
		
		<?php } } ?>

    <

    <?php


  foreach ($empresa2 as $i) {
    foreach ($i->empresa as $g) {
      $n++;
     
      
   
        # code...
      ?>

      
      
    
    <tr>
      <td><?php echo $n;?></td>
      <td><?php echo $g->cedula_ruc;?></td>
      <td><?php echo $g->nombre_empresa;?></td>
      <td><?php echo $g->correo;?></td>
      <td><?php echo $g->link;?></td>
      <td><input type="image" src="<?=base_url('img/editar.png')?>" width="25" height="25" onclick="actualizar2(<?php echo $g->id_empresa;?>)"></td>

      <td><input type="image" src="<?=base_url('img/delete.png')?>" width="25" height="25" onclick= "eliminar2(<?php echo $g->id_empresa;?>)"></td>


      

    </tr>
  
    
    <?php } } ?>

   

      <?php


  foreach ($empresa3 as $i) {
    foreach ($i->empresa as $g) {
       $n++;
     
      
   
        # code...
      ?>

      
      
    
    <tr>
      <td><?php echo $n;?></td>
      <td><?php echo $g->cedula_ruc;?></td>
      <td><?php echo $g->nombre_empresa;?></td>
      <td><?php echo $g->correo;?></td>
      <td><?php echo $g->link;?></td>
      <td><input type="image" src="<?=base_url('img/editar.png')?>" width="25" height="25" onclick="actualizar3(<?php echo $g->id_empresa;?>)"></td>

      <td><input type="image" src="<?=base_url('img/delete.png')?>" width="25" height="25" onclick= "eliminar3(<?php echo $g->id_empresa;?>)"></td>


      

    </tr>
  
    
    <?php } } ?>

  




	
	  </tbody>
	</table>
	
	
	</div>

<!-- div para actualizar empresa -->
	 <div class="card mt-4" id="actualiza" style="display: none">
        <div class="container">
         
           <center><h1>Actualizar</h1></center>

           	<form id="formulario" action="" method="post">

			
    <div class="form-group">
      <label for="inputNombre">Nombre</label>
      <input type="text" class="form-control" name="inputNombre" id="nombre" >
    </div>
    <div class="form-group">
      <label for="inputCedula">Cedula/RUC</label>
      <input type="text" class="form-control" name="inputCedula" id="cedula">
    </div>
  
  <div class="form-group">
    <label for="inputRepresentante">Representante Legal</label>
    <input type="text" class="form-control" name="inputRepresentante" id="representante">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputTipo">Tipo empresa</label>
     <input type="text" class="form-control" name="inputTipo" id="tipo">
  </div>
    <div class="form-group col-md-4">
      <label for="inputTelefono">Telefono</label>
         <input type="text" class="form-control" name="inputTelefono" id="telefono">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCelular">Celular</label>
      <input type="text" class="form-control" name="inputCelular" id="celular">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-5">
    <label for="inputCorreo">Correo</label>
    <input type="email" class="form-control" name="inputCorreo" id="correo">
  </div>
    <div class="form-group col-md-5">
      <label for="inputLink">Link</label>
         <input type="text" class="form-control" name="inputLink" id="link">
    </div>
    <div class="form-group col-md-2">
      <label for="inputFacturacion">Facturación</label>
       <input type="text" class="form-control" name="inputFacturacion" id="facturacion">
    </div>
  </div>

   <div class="form-group">

  <center><button type="submit" class="btn btn-primary">Guardar</button></center>
  </div>

</form>
</div>
</div>
<!-- fin div actualizar -->
	</div>
	</div>
	</div>

	
		<script type="text/javascript">


    function actualizar(id)
    {
      
    	<?php 
      foreach ($empresa as $i) {
      foreach ($i->empresa as $g) {
        ?>
    		var c = '<?php echo $g->id_empresa;?>';
        if (c == id){ 
        

    	
        var div1 = document.getElementById('tabla');
        var div2 = document.getElementById('actualiza');
      
          div2.style.display = 'block';
          div1.style.display = 'none';
        var nombre= document.getElementById('nombre');
        nombre.value='<?php echo $g->nombre_empresa;?>';
        document.getElementById('cedula').value= '<?php echo $g->cedula_ruc;?>';
        document.getElementById('representante').value= '<?php echo $g->representante_legal;?>';
        document.getElementById('tipo').value= '<?php echo $g->tipo_empresa;?>';
        document.getElementById('telefono').value= '<?php echo $g->telefono;?>';
        document.getElementById('celular').value= '<?php echo $g->celular;?>';
        document.getElementById('correo').value= '<?php echo $g->correo;?>';
        document.getElementById('link').value= '<?php echo $g->link;?>';
        document.getElementById('facturacion').value= '<?php echo $g->servicio_facturacion;?>';
         document.getElementById('formulario').action = "<?=site_url('controlador/actualizarEmpresa/');?>"+c;
      }<?php 
        }
      }
      ?>


    	  
    }


    function actualizar2(id)
    {
      
      <?php 
      foreach ($empresa2 as $i) {
      foreach ($i->empresa as $g) {
        ?>
        var c = '<?php echo $g->id_empresa;?>';
        if (c == id){ 
        

      
        var div1 = document.getElementById('tabla');
        var div2 = document.getElementById('actualiza');
      
          div2.style.display = 'block';
          div1.style.display = 'none';
        var nombre= document.getElementById('nombre');
        nombre.value='<?php echo $g->nombre_empresa;?>';
        document.getElementById('cedula').value= '<?php echo $g->cedula_ruc;?>';
        document.getElementById('representante').value= '<?php echo $g->representante_legal;?>';
        document.getElementById('tipo').value= '<?php echo $g->tipo_empresa;?>';
        document.getElementById('telefono').value= '<?php echo $g->telefono;?>';
        document.getElementById('celular').value= '<?php echo $g->celular;?>';
        document.getElementById('correo').value= '<?php echo $g->correo;?>';
        document.getElementById('link').value= '<?php echo $g->link;?>';
        document.getElementById('facturacion').value= '<?php echo $g->servicio_facturacion;?>';
         document.getElementById('formulario').action = "<?=site_url('client/index_put1/');?>"+c;
      }<?php 
        }
      }
      ?>


        
    }


    function actualizar3(id)
    {
      
      <?php 
      foreach ($empresa3 as $i) {
      foreach ($i->empresa as $g) {
        ?>
        var c = '<?php echo $g->id_empresa;?>';
        if (c == id){ 
        

      
        var div1 = document.getElementById('tabla');
        var div2 = document.getElementById('actualiza');
      
          div2.style.display = 'block';
          div1.style.display = 'none';
        var nombre= document.getElementById('nombre');
        nombre.value='<?php echo $g->nombre_empresa;?>';
        document.getElementById('cedula').value= '<?php echo $g->cedula_ruc;?>';
        document.getElementById('representante').value= '<?php echo $g->representante_legal;?>';
        document.getElementById('tipo').value= '<?php echo $g->tipo_empresa;?>';
        document.getElementById('telefono').value= '<?php echo $g->telefono;?>';
        document.getElementById('celular').value= '<?php echo $g->celular;?>';
        document.getElementById('correo').value= '<?php echo $g->correo;?>';
        document.getElementById('link').value= '<?php echo $g->link;?>';
        document.getElementById('facturacion').value= '<?php echo $g->servicio_facturacion;?>';
         document.getElementById('formulario').action = "<?=site_url('client/index_put2/');?>"+c;
      }<?php 
        }
      }
      ?>


        
    }


    function eliminar(id) {


      document.location.href="<?=site_url('controlador/eliminarEmpresa/')?>"+id;
      // body...
    }

     function eliminar2(id) {


      document.location.href="http://localhost/proyectop/index.php/controlador/eliminarEmpresa/"+id;
      // body...
    }

     function eliminar3(id) {


      document.location.href="http://192.168.5.31/proyecto/index.php/controlador/eliminarEmpresa/"+id;
      // body...
    }
</script>

	

	</body>
	</html> 