<div class="MainContainer"> 
    <h1 class="Title">HOTELES</h1>
    <div class="MainPanel">
        <div class="FormContainer">
            <form class="FormInput" method="POST" action="Querys/AltaHotel.php">
                <table class="InputTable">
                    <tr>
                        <td class="Attribute">
                            Nombre de Hotel
                        </td>
                        <td>
                            <input name="hotel_nombre" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td class="Attribute">
                            Ciudad
                        </td>
                        <td>
                            <input name="hotel_ciudad" type="text">
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
                        <th>Hotel_nombre</th>
                        <th>Hotel_Ciudad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'Querys/muestraHoteles.php';
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



