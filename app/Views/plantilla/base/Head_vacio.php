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
    var jsvar = "/UVEG/";            
  </script>
</head>
<body>
<div class="container mt-5">