<!DOCTYPE html>
<?php
require 'Includes/Conexion.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="CSS/Header.css?ts=<?= time() ?>&quot;">
    <link rel="stylesheet" type="text/css" href="CSS/Index.css?ts=<?= time() ?>&quot;">
    <link rel="stylesheet" type="text/css" href="CSS/Design.css?ts=<?= time() ?>&quot;">

</head>

<body background="Imagenes/hoteles.jpg" width="100%" height="100%">

    <?php
    require 'Includes/Header.php';
    ?>
    <main>
        <?php
        if (isset($_GET["categoria"])) {
            $categoria = $_GET["categoria"];

            switch ($categoria) {
                case "Hoteles":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "ModificarHoteles":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "Habitaciones":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "ModificarHabitaciones":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "Huespedes":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "ModificarHuespedes":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "Reservaciones":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "ModificarReservaciones":
                    require "Includes/" . $categoria . ".php";
                    break;
                case "Vistas":
                    require "Includes/" . $categoria . ".php";
                    break;
            }
        } else {
        }
        ?>
    </main>
</body>

</html>