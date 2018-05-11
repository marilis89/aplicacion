<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title></title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->



    <link rel="stylesheet" type="text/css" href="<?= base_url('librerias/css/bootstrap-grid.css');?>">
   <script type="text/javascript" src="<?= base_url('librerias/js/bootstrap.js');?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('librerias/css/bootstrap.min.css');?>">
   <script type="text/javascript" src="<?= base_url('librerias/jquery/jquery-1.12.4.min.js');?>"></script>

    
   <!-- <link rel="stylesheet" type="text/css" href="<?= base_url('index.php/librerias/DataTables/css/jquery.datatables.min.css');?>"-->
<link rel="stylesheet" type="text/css" href="<?= base_url('librerias/DataTables/css/datatables.min.css');?>"/>

</head>
<body>

        <?php $this->load->view("estilos/estilo"); ?>

        <div class="col-lg-9">
             
           	<div class="card mt-4">
       
                <!-- Aqui la lista de sugerencias -->
      

        		<center><h1>PAGOS</h1></center>
        		<div class="container">


        			<div class="table-responsive">
        				<table id="table_id" class="display">
        					<thead>
        						<tr>
        							<th >#</th>
        							<th >Nombre Empresa</th>
        							<th >Valor Anual</th>
        							<th >Abono</th>
                                    <th >Por Cancelar</th>
                                    <th >Estado</th>
        							<th ></th>
        							</tr>
        					</thead>
        					<tbody>

                                                        <!-- datos para la primera base de datos-->
        						<?php 
        						foreach ($empresa as $i)  {
                                    foreach ($i->empresa as $g)  {
                                    foreach ($i->pago as $p)  {
        								if($g->id_contrato == $p->id_contrato && $p->total<$p->valor_anual){
                                            $debe =$p->valor_anual-$p->total;

 				          # code...
        							//echo '<option value= '.$g->id_contrato.'>' .$g->nombre_empresa.'</option>'                  
        						?>
        						<tr>
        							<td><?php echo $g->id_empresa;?></td>
        							<td><?php echo $g->nombre_empresa;?></td>
        							<td><?php echo $p->valor_anual;?></td>
        							<td><?php echo $p->total;?></td>
                                    <td><?php echo $debe;?></td>
                                    <td><?php echo $p->estado;?></td>
                                    
                                    <td>
                                        <input type="image"  src="<?=base_url('librerias/images/agregarp.png')?>" width="25" height="25" data-toggle="modal" data-target="#miModal" onclick='agregarp(<?php echo $g->id_contrato;?>)' >
                                  
                                        
                                    </td>

        						  </tr>

        						<?php }}} }?>

                                                        <!-- datos para la segunda base de datos -->
                                                        <?php 
                                                        foreach ($empresa2 as $i)  {
                                                             foreach ($i->empresa as $g)  {
                                                                foreach ($i->pago as $p)  {
                                                                        if($g->id_contrato == $p->id_contrato && $p->total<$p->valor_anual){
                                                                             $debe2 =$p->valor_anual-$p->total;

                                          # code...
                                                                //echo '<option value= '.$g->id_contrato.'>' .$g->nombre_empresa.'</option>'                  
                                                        ?>
                                                        <tr>
                                                                <td><?php echo $g->id_empresa;?></td>
                                                                <td><?php echo $g->nombre_empresa;?></td>
                                                                <td><?php echo $p->valor_anual;?></td>
                                                                <td><?php echo $p->total;?></td>
                                                                <td><?php echo $debe2;?></td>
                                                                <td><?php echo $p->estado;?></td>
                                                                
                                                                  <td>
                                                                    <input type="image"  src="<?=base_url('librerias/images/agregarp.png')?>" width="25" height="25" data-toggle="modal" data-target="#miModal" onclick='agregarp2(<?php echo $g->id_contrato;?>)'>


                                                                </td>
                                                            </a>
                                                          </tr>

                                                        <?php }}}} ?>
        								
        					</tbody>
                            <tfoot>
                             <tr>
                                <th>#</th>
                                <th>Nombre Empresa</th>
                                <th>Valor Anual</th>
                                <th >Abono</th>
                                <th >Por Cancelar</th>
                                <th >Estado</th>
                                <th ></th>
                            </tr>
                        </tfoot>
                    </table>
        			</div>


        		</div>
        	</div>
        </div>

        <!-- model para agregar el pago-->
        <!-- Trigger the modal with a button -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">PAGO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>
                    </button> 
                    
                </div>
                <div class="modal-body">    
                    <form id="formulario" action="<?= site_url('/pago_controlador/insertar_pago_empresa'); ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Empresa</label>
                            <input class="form-control" name="inputEmpresa" id="nombreE" type="text" placeholder="" disabled required="">
                             <input name="inputId" id="nombreId" type="text" style="display: none;">
                            
                    </div>
                        
                                 <div class="col-xs-8">
                                    <label>Valor Pago</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" name="valor" value="<?php echo set_value('valor_pago')?>" required="" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <label>Estado</label>
                                    <select name="estado" class="form-control" type="text" required="" placeholder="">
                                        <option>Select...</option>
                                        <option>Pendiente</option>
                                        <option>Cancelado</option>
                                    </select>
                                </div>

                                

                                <!--<input class="form-control" name="inputP" id="debe" value="<?php echo $debe;?>" type="text" placeholder="" disabled>-->
                            
                                      
                        <br>        
                        <button type="submit" class="btn btn-primary">Guardar</button>    
                    </form>
                </div>
               
            </div>
        </div>
    </div>

<script type="text/javascript" src="<?= base_url('librerias/DataTables/js/jquery.datatables.min.js');?>"></script>
<!-- scrip para agregar pago -->
<script type="text/javascript">
    

    function agregarp(id){

        

        <?php 
         foreach ($empresa as $i) {
        foreach ($i->empresa as $g) {
            ?>
            var c = '<?php echo $g->id_contrato;?>';
            if (c == id){ 
                console.log('si');
                var nombre = document.getElementById('nombreE');
                nombre.value = '<?php echo $g->nombre_empresa;?>';
                var contrato=document.getElementById('nombreId');
                contrato.value= c;
                
            }

            <?php 
}
        }
        ?>
    }

function agregarp2(id){

        

        <?php 
         foreach ($empresa2
          as $i) {
        foreach ($i->empresa as $g) {
            ?>
            var c = '<?php echo $g->id_contrato;?>';
            if (c == id){ 
                console.log('si');
                var nombre = document.getElementById('nombreE');
                nombre.value = '<?php echo $g->nombre_empresa;?>';
                var contrato=document.getElementById('nombreId');
                contrato.value= c;
                document.getElementById('formulario').action="http://localhost/proyectorest/index.php/controlador/pago";
                //document.getElementById('debe').value='<?php echo $debe2;?>';
                
            }

            <?php 
}
        }
        ?>
    }

$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>

</body>
</html>