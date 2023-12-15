

<?php 
$la_imagen = 2;
include("templates/header.php"); 


?>
    <br>

      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="img/ventapollo.jpg" width="500" height="270" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Facturar Pollo</h5>
        <p class="card-text">Creacion de factura, calculos y ganancias.</p>
        <a name="" id="" class="btn btn-secondary" href="<?php echo $url_base;?>secciones/Camion_MMU/" role="button">Facturar</a> 
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/imgingeniero.jpg" width="500" height="270" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Usuarios</h5>
        <p class="card-text">Administracion de los usuarios y accesos al sistema.</p>
        <a name="" id="" class="btn btn-secondary" href="<?php echo $url_base;?>secciones/usuarios/" role="button">Administrar Accesos</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="img/salir.jpg" width="500" height="270" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cerrar Seccion</h5>
        <p class="card-text">Cerrar seccion del sistema.</p>
        <a name="" id="" class="btn btn-secondary" href="<?php echo $url_base;?>cerrar.php" role="button">Cerrar</a> 
      </div>
    </div>
  </div>
</div>
<br>
<div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bienvenido al area de trabajo, <?php echo $_SESSION['usuario'];?>.</h1>
          <p class="col-md-8 fs-4">Utiliza las herramientas de la pagina para los procesos en la planta...</p>
          <a target="_blank" href="https://api.whatsapp.com/send/?phone=8294389999&text&type=phone_number&app_absent=0"><button class="btn btn-secondary btn-lg" type="button">Contactar Soporte</button></a>
        </div>
      </div>
      <br>
<?php include("templates/footer.php"); ?>