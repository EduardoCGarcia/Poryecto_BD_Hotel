<?php

require '../Includes/Conexion.php';
$no_hab=$_POST["no_Hab"] ;
$no_hotel = $_POST["no_Hotel"];
$tipo = $_POST["tipo"];
$precio = $_POST["precio"];


function modificaHabitacion() {
    global $no_hab, $no_hotel, $tipo, $precio, $conexion;

    $query = "UPDATE habitacion SET no_Hab='" . $no_hab . "', no_Hotel='" . $no_hotel . "' , tipo ='" . $tipo . "',precio='" . $precio . "' WHERE no_Hab='" . $no_hab . "'";


    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Habitaciones");
    } else {
        echo 'No se pudo realizar el query';
    }
}
echo $query;
if ($no_hotel != "" && $tipo != "" && $precio != "") {
    modificaHabitacion();
} else {
    header("Location: ../index.php?categoria=ModificarHabitaciones&no_Hab=" . $no_habitacion);
}
?>





