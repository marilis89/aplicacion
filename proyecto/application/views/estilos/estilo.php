<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sitio Web</title>
	  <link href="<?=base_url('librerias/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('librerias/css/shop-item.css') ?>" rel="stylesheet">
    <link href="<?=base_url('librerias/css/bootstrap.css') ?>" rel="stylesheet">
    <script type="text/javascript" src="<?=base_url('librerias/js/bootstrap.min.js')?>"></script> 
    <script type="text/javascript" src="<?=base_url('librerias/jquery/jquery.min.js')?>"></script> 

	


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	</head>
	
	<body>
    
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>


        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs"><?php echo $this->session->userdata('nombre')?> 
                </span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-body">
                 <div class="row">
                  <div class="col-xs-12 text-center">
                    <a href="<?=site_url('login_controlador/logout');?>">Cerrar Sesion</a>
                  </div>
                </div> 

              </li>
            </ul>

          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="container">

  <div class="row">

   <div class="col-lg-3">
    <h1 class="my-4">Menu</h1>
    <div class="list-group">
      <a href="<?=site_url('controlador')?>" class="list-group-item ">Agregar Contrato</a>
      <a href="<?=site_url('producto')?>" class="list-group-item">Agregar Producto</a>
      <a href="#" class="list-group-item">Agregar Pago</a>
      <a href="<?=site_url('controlador/menu')?>" class="list-group-item">Lista Deudores</a>
      <a href="<?=site_url('controlador/empresa')?>" class="list-group-item">Lista Empresas</a>
    </div>
  </div>














</body>
</html> 
