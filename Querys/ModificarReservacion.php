<?php

require '../Includes/Conexion.php';

$prev_no_hotel = $_POST["prev_no_hotel"];
$prev_no_hab = $_POST["prev_no_hab"];
$prev_no_huesped = $_POST["prev_no_huesped"];

$no_hotel = $_POST["no_hotel"];
$no_hab = $_POST["no_habitacion"];
$no_huesped = $_POST["no_huesped"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["fecha_fin"];

function modificaReservacion() {
    global $no_hotel, $no_hab, $no_huesped, $fecha_inicio, $fecha_fin,$prev_no_hotel,$prev_no_hab,$prev_no_huesped, $conexion;

    $query = "UPDATE reservacion SET no_Hotel='" . $no_hotel . "', no_Hab='" . $no_hab . "' , no_Huesped='" 
            . $no_huesped . "', fecha_Inicio='" . $fecha_inicio . "', fecha_Fin='" . $fecha_fin . "'"
            ."WHERE no_Hotel = '".$prev_no_hotel."' AND no_Hab ='".$prev_no_hab."'AND no_Huesped='".$prev_no_huesped."'" ;
            

    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Reservaciones");
    } else {
        
    header("Location: ../index.php?categoria=ModificarReservaciones&no_hotel=" 
            . $no_hotel."&no_habitacion=".$no_hab."&no_huesped=".$no_huesped."&error=1");

    }
}

if ($no_hotel != "" && $no_hab != "" && $no_huesped != "" && $fecha_inicio != "" && $fecha_fin != "") {
    modificaReservacion();
} else {
    header("Location: ../index.php?categoria=ModificarReservaciones&no_hotel=" . $no_hotel."&no_habitacion=".$no_hab."&no_huesped=".$no_huesped);
}
?>
