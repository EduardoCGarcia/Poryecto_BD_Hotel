<?php
muestraHabitaciones();

function muestraHabitaciones() {
    global $conexion;
    $query = "SELECT * FROM habitacion"; // Selecciona todos los datos de la tabla habitacion 
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?> 
        <tr> <!--Pintar filas-->
            <td> <?php echo $row['no_Hab'] ?> </td><!--Celdas-->
            <td> <?php echo $row['no_Hotel'] ?> </td><!--Celdas-->
            <td> <?php echo $row['tipo'] ?> </td><!--Celdas-->
            <td> <?php echo $row['precio'] ?> </td><!--Celdas-->
            <td>
                <a href="Querys/EliminarHabitacion.php?no_Hab=<?php echo $row['no_Hab'] ?>">
                    <img src="Imagenes/delete.png" width="30" height="30">
                </a>
                <a href="index.php?categoria=ModificarHabitaciones&no_Hab=<?php echo $row['no_Hab'] ?>">
                    <img src="Imagenes/modify.png" width="20" height="20" style="padding: 5px 0;">
                </a>
            </td>
        </td>
        </tr>
        <?php
    }
}

?>

