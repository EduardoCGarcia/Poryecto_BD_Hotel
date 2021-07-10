<?php
$no_Hotel = $_GET['no_hotel'];
$no_Hab=$_GET['no_habitacion'];
$no_Huesped=$_GET['no_huesped'];

$query = "SELECT * FROM reservacion WHERE no_Hotel='".$no_Hotel."' AND no_Hab='".$no_Hab."'AND no_Huesped='".$no_Huesped."'"; // Selecciona todos los dartos de la tabla hotel 
$result = mysqli_query($conexion, $query);
$reservacion = mysqli_fetch_array($result);
    
    ?>  


<div class="MainContainer"> 
    <h1 class="Title">MODIFICAR RESERVACIONES</h1>
    <div class="MainPanel">
        <div class="ModifyFormContainer">
            <form class="FormInput" method="POST" action="Querys/ModificarReservacion.php">
                <input name="prev_no_hotel" type="hidden" value="<?php echo $reservacion['no_Hotel'];?>">
                <input name="prev_no_hab" type="hidden" value="<?php echo $reservacion['no_Hab'];?>">
                <input name="prev_no_huesped" type="hidden" value="<?php echo $reservacion['no_Huesped'];?>">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            No_Hotel
                        </td>
                        <td>
                            <input name="no_hotel" type="text" value="<?php echo $reservacion['no_Hotel'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            No_Habitacion
                        </td>
                        <td>
                            <input name="no_habitacion" type="text" value="<?php echo $reservacion['no_Hab'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            No_Huesped
                        </td>
                        <td>
                            <input name="no_huesped" type="text" value="<?php echo $reservacion['no_Huesped'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Fecha_Inicio
                        </td>
                        <td>
                            <input name="fecha_inicio" type="text" value="<?php echo $reservacion['fecha_Inicio'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Fecha_Fin
                        </td>
                        <td>
                            <input name="fecha_fin" type="text" value="<?php echo $reservacion['fecha_Fin'];?>">
                        </td>
                    </tr>

                </table>
                <div class="Save"><input  class="BtnSave" type="submit" value="Guardar" ></div>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 0) {
                        ?>
                        <p style="color: greenyellow;"> Reservacion Exitosa </p> 
                    <?php } else { ?>
                        <p style="color: red;"> Resevacion Fallida </p>   
                        <?php
                    }
                }
                ?>
            </form>    
        </div>
    </div>
</div>