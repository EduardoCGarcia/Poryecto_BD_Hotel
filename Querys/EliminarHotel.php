<?php
require '../Includes/Conexion.php';

function EliminarHotel($no_Hotel){
    global $conexion;
    
    $query = "DELETE FROM hotel WHERE no_Hotel = '".$no_Hotel."'";
    
    if(mysqli_query($conexion, $query)){
        header("Location: ../index.php?categoria=Hoteles&error=0");
    } else {
        header("Location: ../index.php?categoria=Hoteles&error=1");
    }
} 

EliminarHotel($_GET['no_Hotel']);
?>