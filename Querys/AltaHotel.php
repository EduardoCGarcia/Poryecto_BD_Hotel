<?php
require '../Includes/Conexion.php';

$no_hotel = "";
$nombre_hotel = $_POST["hotel_nombre"];
$ciudad_hotel = $_POST["hotel_ciudad"];

if ($nombre_hotel != "" && $ciudad_hotel!= ""){
altaHotel();
}else{
header("Location: ../index.php?categoria=Hoteles");
}

function altaHotel() {
    global $no_hotel, $nombre_hotel, $ciudad_hotel, $conexion;

    $query = "INSERT INTO hotel(no_Hotel, nombre_Hotel , ciudad_Hotel)"
            . "VALUES('" . $no_hotel . "','" . $nombre_hotel . "','" . $ciudad_hotel . "')";

    if (mysqli_query($conexion, $query)) {
        header("Location: ../index.php?categoria=Hoteles");
    } else {
        echo 'No se pudo realizar el query';
    }
}
 

?>
