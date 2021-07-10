<?php

$server = "localhost";
$usuario = "root";
$pass = "";
$BD = "hotel";

$conexion = mysqli_connect($server, $usuario, $pass, $BD);

if (!$conexion) {
    echo 'Error en la conexion';
}
?>