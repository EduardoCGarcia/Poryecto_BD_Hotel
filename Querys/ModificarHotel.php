<?php

require '../Includes/Conexion.php';

$no_hotel = $_POST["no_Hotel"];
$nombre_hotel = $_POST["hotel_nombre"];
$ciudad_hotel = $_POST["hotel_ciudad"];

function modificaHotel() {
    global $no_hotel, $nombre_hotel, $ciudad_hotel, $conexion;

    $query = "UPDATE hotel SET nombre_Hotel='" . $nombre_hotel . "' , ciudad_Hotel='" . $ciudad_hotel . "' WHERE no_Hotel='" . $no_hotel . "'";


    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Hoteles");
    } else {
        echo 'No se pudo realizar el query';
    }
}

if ($nombre_hotel != "" && $ciudad_hotel != "") {
    modificaHotel();
} else {
    header("Location: ../index.php?categoria=ModificarHoteles&no_Hotel=" . $no_hotel);
}
?>

