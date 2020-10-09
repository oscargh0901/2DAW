<!-- Pintaremos una tabla que contenga los numeros del 1 al 100 alternando los colores de las columnas -->
<!doctype html>
<?php

function pintarTabla()
{
    echo "<table border=1 align='center' cellpadding='8' cellspacing='6'>" . PHP_EOL;
    for ($i = 0; $i < 10; $i++) {
        echo "<tr class='text-center'>\n";
        for($j=0; $j<10; $j++){
            pintarCelda($j, "aqua", "silver");
        }
        echo "</tr>\n";

    }
    echo "</table>\n";
}
function pintarCelda($c, $color1, $color2){
    global $num;
    if($c%2)
    echo "<td style='background-color:{$color1}'>".$num++."</td>\n";
    else
        echo "<td style='background-color:{$color2}'>".$num++."</td>\n";
}
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Tabla 1</title>

</head>
<body style="background-color: cadetblue">
<h3 class="text-center mt-3">ALTERNANDO COLUMNAS</h3>
<div class="container">
    <?php
    $num = 1;
    pintarTabla();
    ?>
</div>
</body>
</html>