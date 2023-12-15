<?php
session_start();

if($_POST){
include("./bd.php"); 


$sentencia=$conexion->prepare("SELECT *,count(*) as n_usuarios
FROM tbl_usuarios
WHERE usuario= :usuario AND password=:password
");

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$sentencia->bindParam(":usuario", $usuario);
$sentencia->bindParam(":password", $contrasena);
$sentencia->execute();
$registro=$sentencia->fetch(PDO::FETCH_LAZY);

if($registro["n_usuarios"]>0){
  $_SESSION['usuario']=$registro["usuario"];
  $_SESSION['puesto']=$registro["puesto"];
  header("Location:index.php");
}else{
  $mensaje="Error: El usuario o contraseña incorrectos";
}

$lista_tbl_usuarios=$sentencia->fetch((PDO::FETCH_LAZY));

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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">    
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  


  <div class="login-box">
      <img src="img/pollologo.jpg" class="avatar" alt="Avatar Image">
      <h1>Pollera Web</h1>
      <form action="" method="post">
        <!-- USERNAME INPUT -->
        <label>Usuario:</label>
        <input type="text" for="usuario" name="usuario" id="usuario" placeholder="Escriba su usuario">
        <!-- PASSWORD INPUT -->
        <label for="contrasena">Contraseña:</label>
        <input type="password" for="contrasena" name="contrasena" id="contrasena" placeholder="Escriba su contraseña">
        <input type="submit" class="form-control" value="Login">
        <br><br>
        <?php if(isset($mensaje)) {?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo $mensaje;?></strong>
            </div>
        <?php }?>
      </form>
    </div>

  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>