<?php
muestraHoteles();

function muestraHoteles() {
    global $conexion;
    $query = "SELECT * FROM hotel"; // Selecciona todos los dartos de la tabla hotel 
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_array($result)) {
        ?> <!--Recorre todas las filas-->
        <tr> <!--Pintar filas-->
            <td> <?php echo $row['no_Hotel'] ?> </td><!--Celdas-->
            <td> <?php echo $row['nombre_Hotel'] ?> </td><!--Celdas-->
            <td> <?php echo $row['ciudad_Hotel'] ?> </td><!--Celdas-->
            <td>
                <a href="Querys/EliminarHotel.php?no_Hotel=<?php echo $row['no_Hotel'] ?>">
                    <img src="Imagenes/delete.png" width="30" height="30">
                </a>
                <a href="index.php?categoria=ModificarHoteles&no_Hotel=<?php echo $row['no_Hotel'] ?>">
                    <img src="Imagenes/modify.png" width="20" height="20" style="padding: 5px 0;">
                </a>
            </td>
        </td>
        </tr>
        <?php
    }
}
?>