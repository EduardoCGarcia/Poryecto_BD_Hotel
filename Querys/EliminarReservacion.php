<?php
require '../Includes/Conexion.php';

function EliminarReservacion($no_Hotel,$no_Hab,$no_Huesped){
    global $conexion;
    
    $query = "DELETE FROM reservacion WHERE no_Hotel = '".$no_Hotel."' AND no_Hab ='".$no_Hab."'AND no_Huesped='".$no_Huesped."'" ;
    
    if(mysqli_query($conexion, $query)){
        header("Location: ../index.php?categoria=Reservaciones&error=0");
    } else {
        header("Location: ../index.php?categoria=Reservaciones&error=1");
    }
} 

EliminarReservacion($_GET['no_hotel'],$_GET['no_habitacion'],$_GET['no_huesped']);
?>

