<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$titulo;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo BASE_URL."/assets/bootstrap/css/bootstrap.min.css"?>" rel="stylesheet">
  <link href="<?php echo BASE_URL."/assets/css/dataTables.bootstrap5.min.css"?>" rel="stylesheet">
  <link href="<?php echo BASE_URL."/assets/css/principal.css"?>" rel="stylesheet">
  <script src="<?php echo BASE_URL."/assets/bootstrap/js/bootstrap.bundle.min.js"?>"></script>
  <script src="<?php echo BASE_URL."/assets/js/jquery.min.js"?>"></script>
  <script src="<?php echo BASE_URL."/assets/js/dataTables.min.js"?>"></script>
  <script src="<?php echo BASE_URL."/assets/js/bootstrap5.min.js"?>"></script>
  <?php if (isset($scripts)): foreach ($scripts as $js): ?>
    <script src="<?php echo BASE_URL . "/assets/js/{$js}.js" ?>?filever=<?php echo time() ?>" type="text/javascript"></script>
  <?php endforeach; endif;?>
  <script>
    var host_req = window.location.host;
    var jsvar = host_req + "/UVEG/";            
  </script>
</head>
<body>

<div class="container-fluid p-2 text-blue text-left">
  <div class="row">
    <div class="col-sm-5">
      <img src="<?=BASE_URL?>/assets/images/uveg.png" class="imagen">
    </div>
    <div class="col-sm-7">
      <h1 class="titulo">Exámen UVEG</h1>
    </div>   
  </div>  
</div>
<nav class="navbar navbar-expand-sm">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <button class="btn btn-primary btn-primaryM ml-2 tab" type="button" id="1">Inicio</button>
      <button class="btn btn-primary btn-primaryM ml-2 tab" type="button" id="2">Centro</button>
      <button class="btn btn-primary btn-primaryM ml-2 tab" type="button" id="3">Alumnos</button>
      <button class="btn btn-primary btn-primaryM ml-2 tab" type="button" id="4">Calificaciones</button>
    </div>
  </div>
</nav>
<div class="container mt-5">