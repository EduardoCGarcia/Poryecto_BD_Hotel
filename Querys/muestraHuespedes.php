<?php
muestraHuespedes();

function muestraHuespedes() {
    global $conexion;
    $query = "SELECT * FROM huesped"; // Selecciona todos los dartos de la tabla hotel 
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?> <!--Recorre todas las filas-->
        <tr> <!--Pintar filas-->
            <td> <?php echo $row['no_Huesped'] ?> </td><!--Celdas-->
            <td> <?php echo $row['nombre'] ?> </td><!--Celdas-->
            <td> <?php echo $row['direccion'] ?> </td><!--Celdas-->
            <td>
                <a href="Querys/EliminarHuesped.php?no_Huesped=<?php echo $row['no_Huesped'] ?>">
                    <img src="Imagenes/delete.png" width="30" height="30">
                </a>
                <a href="index.php?categoria=ModificarHuespedes&no_Huesped=<?php echo $row['no_Huesped'] ?>">
                    <img src="Imagenes/modify.png" width="20" height="20" style="padding: 5px 0;">
                </a>
            </td>
        </td>
        </tr>
        <?php
    }
}
?>