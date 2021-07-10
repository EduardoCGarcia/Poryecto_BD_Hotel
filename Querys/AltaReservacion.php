<?php

require '../Includes/Conexion.php';

$no_hotel = $_POST["no_hotel"];
$no_hab = $_POST["no_habitacion"];
$no_huesped = $_POST["no_huesped"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];

if ($no_hotel != "" && $no_hab != "" && $no_huesped != "" && $fecha_inicio != "" && $fecha_fin != "") {
    altaReservacion();
} else {
    header("Location: ../index.php?categoria=Reservaciones");
    echo 'No altas';
}

function altaReservacion() {
    global $no_hotel, $no_hab, $no_huesped, $fecha_inicio, $fecha_fin, $conexion;

    $query = "INSERT INTO reservacion(no_Hotel, no_Hab , no_Huesped, fecha_Inicio, fecha_Fin)"
            . "VALUES('" . $no_hotel . "','" . $no_hab . "','" . $no_huesped . "','" . $fecha_inicio . "','" . $fecha_fin . "')";
    
    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Reservaciones");
    } else {
        echo 'No se pudo realizar el query';
    }
}
?>

