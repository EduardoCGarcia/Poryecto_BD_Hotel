<?php
$no_Hab = $_GET['no_Hab'];

$query = "SELECT * FROM habitacion WHERE no_Hab='" . $no_Hab . "'"; // Selecciona todos los dartos de la tabla habitacion
$result = mysqli_query($conexion, $query);
$habitacion = mysqli_fetch_array($result);
?>  


<div class="MainContainer"> 
    <h1 class="Title">MODIFICAR HABITACIONES</h1>
    <div class="MainPanel">
        <div class="ModifyFormContainer">
            <form class="FormInput" method="POST" action="Querys/ModificarHabitacion.php">
                <input name="no_Hab" type="hidden" value="<?php echo $habitacion['no_Hab']; ?>">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            No_Hotel
                        </td>
                        <td>
                            <input name="no_Hotel" type="text" value="<?php echo $habitacion['no_Hotel']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Tipo
                        </td>
                        <td>
                            <input name="tipo" type="text" value="<?php echo $habitacion['tipo']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Precio
                        </td>
                        <td>
                            <input name="precio" type="text"value="<?php echo $habitacion['precio']; ?>">
                        </td>
                    </tr>
                </table>
                <div class="Save"><input  class="BtnSave" type="submit" value="Guardar" ></div>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 0) {
                        ?>
                        <p style="color: greenyellow;"> Eliminacion Exitosa </p> 
                    <?php } else { ?>
                        <p style="color: red;"> Eliminacion Fallida </p>   
                        <?php
                    }
                }
                ?>
            </form>    
        </div>
    </div>
</div>

