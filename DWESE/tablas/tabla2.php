<!-- Pintaremos una tabla que contenga los numeros del 1 al 100 remarcando los primos -->
<!doctype html>
<?php
function isPrimo(int $n) : bool{
    if($n==1) return true; //Supondremos que el 1 es primo
    for($i=2; $i<$n; $i++){
        if($n%$i==0) return false; //si encuentro un divisor que no se 1 o el mismo NO es primo
    }
    return true;

}
function pintarTabla()
{
    echo "<table border=1 align='center' cellpadding='6' cellspacing='6'>" . PHP_EOL;
    for ($i = 0; $i < 10; $i++) {
        echo "<tr style='background-color:lightgray' class='text-center'>\n";
        for($j=0; $j<10; $j++){
            pintarCelda();
        }
        echo "</tr>\n";

    }
    echo "</table>\n";
}
function pintarCelda(){
    global $num;
    isPrimo($num) ? $cad= "<td class='text-danger font-weight-bold'>".$num++."</td>\n" : $cad= "<td class='text-success'>".$num++."</td>\n";
    echo $cad;
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
<h3 class="text-center mt-3">PRIMOS RESALTADOS</h3>
<div class="container">
    <?php
    $num = 1;
    pintarTabla();
    ?>
</div>
</body>
</html>

