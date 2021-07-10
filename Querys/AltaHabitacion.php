<?php
require '../Includes/Conexion.php';

$no_hab = "";
$no_hotel = $_POST["no_Hotel"];
$tipo_hab= $_POST["tipo"];
$precio_hab = $_POST["precio"];

if ($no_hotel != "" && $tipo_hab != "" && $precio_hab != "") {
    altaHabitacion();
} else {
    header("Location: ../index.php?categoria=Habitaciones");
}

function altaHabitacion() {
    global $no_hab, $no_hotel, $tipo_hab, $precio_hab, $conexion;

    $query = "INSERT INTO habitacion(no_Hab, no_Hotel, tipo, precio)"
            . " VALUES('" . $no_hab . "','" . $no_hotel . "','" . $tipo_hab. "','" . $precio_hab . "')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Habitaciones");
    } else {
        echo 'No se pudo realizar el query';
   }
}


?>