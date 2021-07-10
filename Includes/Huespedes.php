<div class="MainContainer"> 
    <h1 class="Title">HUESPEDES</h1>
    <div class="MainPanel">
        <div class="FormContainer">
            <form class="FormInput" method="POST" action="Querys/AltaHuespedes.php">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            Nombre 
                        </td>
                        <td>
                            <input name="huesped_nombre" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Direccion
                        </td>
                        <td>
                            <input name="huesped_direccion" type="text">
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
        <div class="TableContainer">

            <table class="Table" border="3">
                <thead>
                    <tr>
                        <th>No_Huesped</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'Querys/muestraHuespedes.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

