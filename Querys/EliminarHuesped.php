<?php
require '../Includes/Conexion.php';

function EliminarHuesped($no_Huesped){
    global $conexion;
    
    $query = "DELETE FROM huesped WHERE no_Huesped = '".$no_Huesped."'";
    
    if(mysqli_query($conexion, $query)){
        header("Location: ../index.php?categoria=Huespedes&error=0");
    } else {
        header("Location: ../index.php?categoria=Huespedes&error=1");
    }
} 

EliminarHuesped($_GET['no_Huesped']);
?>

