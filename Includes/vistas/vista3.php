<table class="Table" border="3">
    <thead>
        <tr>
            <th>Nombre_Hotel</th>
            <th>Ciudad_Hotel</th>
        </tr>
    </thead>
    <tbody>
        <?php
        global $conexion;
        $query = "SELECT * FROM vista3"; // Selecciona todos los dartos de la tabla hotel 
        $result = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($result)) {
            ?> <!--Recorre todas las filas-->
            <tr> <!--Pintar filas-->
                <td> <?php echo $row['nombre_Hotel'] ?> </td><!--Celdas-->
                <td> <?php echo $row['ciudad_Hotel'] ?> </td><!--Celdas-->
            </tr>
            <?php } ?>