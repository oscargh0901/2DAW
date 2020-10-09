<!-- Pintaremos una tabero de ajedrez -->
<!doctype html>
<?php

function pintarTabla()
{
    echo "<table border=1 align='center' cellpadding='8' cellspacing='6'>" . PHP_EOL;
    for ($i = 0; $i < 8; $i++) {
        echo "<tr class='text-center'>\n";
        for($j=0; $j<8; $j++){
            if(($i+$j)%2){
                pintarCelda("black", "white");
            }
            else{
                pintarCelda("white", "black");
            }
        }
        echo "</tr>\n";

    }
    echo "</table>\n";
}
function pintarCelda($colCelda, $colFont){
    static $num=1;
    echo "<td style='background-color: {$colCelda}; color:{$colFont};'>".$num++."</td>\n";
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
<h3 class="text-center mt-3">TABLERO DE AJEDREZ</h3>
<div class="container">
    <?php
    pintarTabla();
    ?>
</div>
</body>
</html>