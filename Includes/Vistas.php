<?php
$descripcion;
if (isset($_GET['no_vista'])) {
    if ($_GET['no_vista'] == 1) {
        $descripcion = "Vista 1: Nombre de los huéspedes, fecha de inicio y nombre de hotel"
                . " de todos aquellos huéspedes que registraron alguna reservación.";
    } else if ($_GET['no_vista'] == 2) {
        $descripcion = "Vista 2: Total de huéspedes registrados.";
    } else if ($_GET['no_vista'] == 3) {
        $descripcion = "Vista 3: Nombre y ciudad de los hoteles registrados agrupado por ciudad.";
    }
}
?>
<div class="MainContainer"> 
    <h1 class="Title">VISTAS</h1>
    <div class="MainPanel">
        <div class="FormContainer">

            <ul class="BtnPanel">
                <li class="BtnContainer"><a class="BtnSave middle" href="index.php?categoria=Vistas&no_vista=1" >VISTA 1</a></li>
                <li class="BtnContainer"><a class="BtnSave middle" href="index.php?categoria=Vistas&no_vista=2" >VISTA 2</a></li>
                <li class="BtnContainer"><a class="BtnSave middle" href="index.php?categoria=Vistas&no_vista=3" >VISTA 3</a></li>

            </ul>
            <hr>
            <br>
            <p><?php echo isset($descripcion) ? $descripcion : "" ?></p>
            <br>
            <hr>
        </div>
        <div class="TableContainer">
            <?php
            $descripcion;
            if (isset($_GET['no_vista'])) {
                if ($_GET['no_vista'] == 1) {
                    
                    require 'Includes/vistas/vista1.php';
                   
                } else if ($_GET['no_vista'] == 2) {
                    
                    require 'Includes/vistas/vista2.php';
                   
                } else if ($_GET['no_vista'] == 3) {
                    
                    require 'Includes/vistas/vista3.php';
                }
            }
            ?>

            </tbody>
            </table>
        </div>
    </div>
</div>




