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

	

	</head>
	
	<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
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
        </div>
      </div>
    </nav>

   

    <div class="container">

      <div class="row">

         <div class="col-lg-3">
          <h1 class="my-4">Menu</h1>
          <div class="list-group">
            <a href="<?=site_url('controlador')?>" class="list-group-item">Agregar Contrato</a>
            <a href="<?=site_url('producto')?>" class="list-group-item">Agregar Producto</a>
            <a href="#" class="list-group-item">Agregar Pago</a>
            <a href="<?=site_url('controlador/menu')?>" class="list-group-item">Lista Deudores</a>
            <a href="<?=site_url('controlador/empresa')?>" class="list-group-item">Lista Empresas</a>
          </div>
        </div>
         









		
	

	
	</body>
	</html> 