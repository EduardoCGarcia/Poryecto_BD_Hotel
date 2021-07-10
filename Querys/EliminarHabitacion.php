<?php
require '../Includes/Conexion.php';

function EliminarHabitacion($no_Hab){
    global $conexion;
    
    $query = "DELETE FROM habitacion WHERE no_Hab = '".$no_Hab."'";
    
    if(mysqli_query($conexion, $query)){
        header("Location: ../index.php?categoria=Habitaciones&error=0");
    } else {
        header("Location: ../index.php?categoria=Habitaciones&error=1");
    }
} 

EliminarHabitacion($_GET['no_Hab']);
?>