<div class="MainContainer"> 
    <h1 class="Title">HABITACIONES</h1>
    <div class="MainPanel">
        <div class="FormContainer">
            <form class="FormInput" method="POST" action="Querys/AltaHabitacion.php">
                <table class="InputTable">
                    <tr>
                         <td class="Attribute">
                             no_Hotel
                         </td>
                        <td>
                            <input name="no_Hotel" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Tipo
                        </td>
                        <td>
                            <input name="tipo" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Precio
                        </td>
                        <td>
                            <input name="precio" type="text">
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
                        <th>No_Habitacion</th>
                        <th>No_Hotel</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'Querys/muestraHabitaciones.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
