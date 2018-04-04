<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url('librerias/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('librerias/css/signin.css');?>">
    <link rel="icon" type="text/css" href="<?=base_url('librerias/images/favicon.ico');?>">

     <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?=site_url('login_controlador/autentificarLogin');?>" method="post">
      <img class="mb-4" src="<?=base_url('librerias/images/login.png');?>" alt="" width="150" height="150" >
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputUser" class="sr-only">Username</label>
      <input type="text" name="username"  class="form-control" placeholder="Username" required autofocus>
      </br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>