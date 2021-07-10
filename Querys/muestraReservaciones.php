<?php
muestraReservaciones();

function muestraReservaciones()
{
    global $conexion;
    $query = "SELECT * FROM reservacion"; // Selecciona todos los datos de la tabla habitacion 
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_array($result)) {
?>
        <tr>
            <!--Pintar filas-->
            <td> <?php echo $row['no_Hotel'] ?> </td>
            <!--Celdas-->
            <td> <?php echo $row['no_Hab'] ?> </td>
            <!--Celdas-->
            <td> <?php echo $row['no_Huesped'] ?> </td>
            <!--Celdas-->
            <td> <?php echo $row['fecha_Inicio'] ?> </td>
            <!--Celdas-->
            <td> <?php echo $row['fecha_Fin'] ?> </td>
            <!--Celdas-->
            <td>
                <a href="Querys/EliminarReservacion.php?no_hotel=<?php echo $row['no_Hotel'] ?>&no_habitacion=<?php echo $row['no_Hab'] ?>&no_huesped=<?php echo $row['no_Huesped'] ?>">
                    <img src="Imagenes/delete.png" width="30" height="30">
                </a>
                <a href="index.php?categoria=ModificarReservaciones&no_hotel=<?php echo $row['no_Hotel'] ?>&no_habitacion=<?php echo $row['no_Hab'] ?>&no_huesped=<?php echo $row['no_Huesped'] ?>">
                    <img src="Imagenes/modify.png" width="20" height="20" style="padding: 5px 0;">
                </a>
            </td>
            </td>
        </tr>
<?php
    }
}

?>