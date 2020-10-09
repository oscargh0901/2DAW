<!-- Pintaremos una tabla alternando el color de sus filas y que contenga los numeros del 1 al 100 -->
<!doctype html>
<?php
function pintarTabla()
{
    echo "<table border=1 align='center' cellpadding='6' cellspacing='6'>" . PHP_EOL;
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2) {
            pintarFila("silver");
        } else {
            pintarFila("aqua");
        }
        //($i % 2) ? pintarFila("silver") : pintarFila("aqua"); Esto puede sustituir a los if de arriba es operador condicional ternario
    }
    echo "<table>" . PHP_EOL;
}
function pintarFila($col){
    global $num;
    echo "<tr style='background-color:{$col}' class='text-center'>\n";
    for($i=0; $i<10; $i++){
        echo "<td>".$num++."</td>\n";
    }
    echo "<tr>\n";
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
<h3 class="text-center mt-3">Filas Alternas</h3>
<div class="container">
    <?php
    $num = 1;
    pintarTabla();
    ?>
</div>
</body>
</html>
