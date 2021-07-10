<?php
$no_Huesped = $_GET['no_Huesped'];

$query = "SELECT * FROM huesped WHERE no_Huesped='".$no_Huesped."'"; 
$result = mysqli_query($conexion, $query);
$huesped = mysqli_fetch_array($result);
    
    ?>  


<div class="MainContainer"> 
    <h1 class="Title">MODIFICAR HUESPEDES</h1>
    <div class="MainPanel">
        <div class="ModifyFormContainer">
            <form class="FormInput" method="POST" action="Querys/ModificarHuesped.php">
                <input name="no_Huesped" type="hidden" value="<?php echo $huesped['no_Huesped'];?>">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            No_Huesped
                        </td>
                        <td>
                            <input name="nombre" type="text" value="<?php echo $huesped['nombre'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Direccion
                        </td>
                        <td>
                            <input name="direccion" type="text" value="<?php echo $huesped['direccion'] ?>">
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