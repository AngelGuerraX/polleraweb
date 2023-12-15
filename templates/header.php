
<?php
session_start();
$url_base="http://localhost/polleraweb/";


if(!isset($_SESSION['usuario'])){
  header("Location:".$url_base."login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>Pollera Web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <style>

    body {
        margin: 0;
        padding: 0;
        background: url(img/fpollo2.jpg) no-repeat center top;
        background-size: cover;
        font-family: sans-serif;
        background-attachment: fixed;
        height: 100vh;
      }
      

    </style>
</head>

<body onload="init();">
  <header>
    <!-- place navbar here -->
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #680000 ; border-bottom: 10px; border-width: 10px;">
  <div class="container-fluid">
    <div class="container-fluid" style="background-color: #680000; border-width: 5px; border-color: red;">
    <a class="navbar-brand" href="<?php echo $url_base;?>">
      <img src="<?php echo $url_base;?>img/bannerpollo.png" style="border-radius: 3px;" alt="Logo" width="220" height="95" href="<?php echo $url_base;?>" class="d-inline-block align-text-top">      
    </a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base;?>secciones/usuarios/"><button type="button" class="btn btn-dark">Usuarios</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base;?>secciones/Camion_MMU/"><button type="button" class="btn btn-dark">Facturar</button></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base;?>cerrar.php"><button type="button" class="btn btn-dark">Cerrar</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <main class="container">