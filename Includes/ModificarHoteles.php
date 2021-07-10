<?php
$no_Hotel = $_GET['no_Hotel'];

$query = "SELECT * FROM hotel WHERE no_Hotel='".$no_Hotel."'"; // Selecciona todos los dartos de la tabla hotel 
$result = mysqli_query($conexion, $query);
$hotel = mysqli_fetch_array($result);
    
    ?>  


<div class="MainContainer"> 
    <h1 class="Title">MODIFICAR HOTELES</h1>
    <div class="MainPanel">
        <div class="ModifyFormContainer">
            <form class="FormInput" method="POST" action="Querys/ModificarHotel.php">
                <input name="no_Hotel" type="hidden" value="<?php echo $hotel['no_Hotel'];?>">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            Nombre de Hotel
                        </td>
                        <td>
                            <input name="hotel_nombre" type="text" value="<?php echo $hotel['nombre_Hotel'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Ciudad
                        </td>
                        <td>
                            <input name="hotel_ciudad" type="text" value="<?php echo $hotel['ciudad_Hotel'] ?>">
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



