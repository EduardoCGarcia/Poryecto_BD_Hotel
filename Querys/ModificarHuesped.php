<?php

require '../Includes/Conexion.php';

$no_huesped = $_POST["no_Huesped"];
$huesped_nombre = $_POST["nombre"];
$huesped_direccion = $_POST["direccion"];

function modificaHuesped() {
    global $no_huesped, $huesped_nombre, $huesped_direccion, $conexion;

    $query = "UPDATE huesped SET nombre='" . $huesped_nombre. "' , direccion='" . $huesped_direccion . "' WHERE no_Huesped='" . $no_huesped . "'";


    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Huespedes");
    } else {
        echo 'No se pudo realizar el query';
    }
}

if ($huesped_nombre != "" &&$huesped_direccion != "") {
    modificaHuesped();
} else {
    header("Location: ../index.php?categoria=ModificarHuespedes&no_Huesped=" . $no_huesped);
}
?>

