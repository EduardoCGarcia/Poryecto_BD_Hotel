<div class="MainContainer"> 
    <h1 class="Title">RESERVACIONES</h1>
    <div class="MainPanel">
        <div class="FormContainer">
            <form class="FormInput" method="POST" action="Querys/AltaReservacion.php">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            No_Hotel
                        </td>
                        <td>
                            <input name="no_hotel" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            No_Habitacion
                        </td>
                        <td>
                            <input name="no_habitacion" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            No_Huesped
                        </td>
                        <td>
                            <input name="no_huesped" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Fecha_Inicio
                        </td>
                        <td>
                            <input name="fecha_inicio" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Fecha_Fin
                        </td>
                        <td>
                            <input name="fecha_fin" type="text">
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
                        <th>No_Hotel</th>
                        <th>No_Habitacion</th>
                        <th>No_Huesped</th>
                        <th>Fecha_Inicio</th>
                        <th>Fecha_Fin</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'Querys/muestraReservaciones.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


