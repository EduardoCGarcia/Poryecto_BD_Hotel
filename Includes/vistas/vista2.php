<table class="Table" border="3">
    <thead>
        <tr>
            <th>Total_Huespedes</th>
        </tr>
    </thead>
    <tbody>
        <?php
        global $conexion;
        $query = "SELECT * FROM vista2"; // Selecciona todos los dartos de la tabla hotel 
        $result = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($result)) {
            ?> <!--Recorre todas las filas-->
            <tr> <!--Pintar filas-->
                <td> <?php echo $row['total_huespedes'] ?> </td><!--Celdas-->
            </tr>
        <?php } ?>
