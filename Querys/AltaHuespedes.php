<?php
require '../Includes/Conexion.php';

$no_huesped = "";
$huesped_nombre = $_POST["huesped_nombre"];
$huesped_direccion = $_POST["huesped_direccion"];

if ($huesped_nombre != "" && $huesped_direccion!= ""){
altaHuesped();
}else{
header("Location: ../index.php?categoria=Huespedes");
}

function altaHuesped() {
    global $no_huesped, $huesped_nombre, $huesped_direccion, $conexion;

    $query = "INSERT INTO huesped(no_Huesped, nombre , direccion)"
            . "VALUES('" . $no_huesped . "','" . $huesped_nombre . "','" . $huesped_direccion . "')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Huespedes");
    } else {
        echo 'No se pudo realizar el query';
    }
}
 

?>

