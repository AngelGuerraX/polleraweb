<?php

$servidor="localhost";
$BaseDeDatos="polleraweb";
$usuario="root";
$contrasenia="";

try{ 
    $conexion= new PDO("mysql:host=$servidor;bdname=$BaseDeDatos",$usuario,$contrasenia);
    $conexion->exec("USE $BaseDeDatos");
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>