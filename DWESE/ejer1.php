<!doctype html>
<?php
function pintarTabla()
{
    echo "<table border=1 align='center' cellpadding='6' cellspacing='6'>" . PHP_EOL;
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2) {
            pintarFila1("green");
            pintarFila2("green");
        } else {
            pintarFila1("white");
            pintarFila2("white");
        }
    }
    echo "<table>" . PHP_EOL;
}
function pintarFila1($col){
    echo "<tr style='background-color:{$col}' class='text-center'>\n";
    for($i=0; $i<1; $i++){
        echo "<td>"."x"."</td>\n";
    }
    echo "<tr>\n";
}
function pintarFila2($col){
    echo "<tr style='background-color:{$col}' class='text-center'>\n";
    for($i=0; $i<1; $i++){
        echo "<td>"."3"."</td>\n";
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
    <title>Ejercicio 1</title>

</head>
<body style="background-color: cadetblue">
<h5 class="text-center mt-3">Tabla de Multiplicar del 3</h5>
<div class="container">
    <?php
    $num = 1;
    pintarTabla();
    ?>
</div>
</body>
</html>
