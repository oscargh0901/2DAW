<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:cadetblue">
    <h3 class="text-center mt-3">Inicio PHP</h3>
    <div class="container mt-3">
            <?php
            //Funciones que no necesitan nombres
            $saludo = function ($n){
                return "<br>Hola te estoy saludando, soy $n<br>";
            };
            //usemos la funcion anterior
            echo $saludo("Manolo");
            //la otra forma que hay de usar este tipo de funciones es:
            function decir($texto){
                echo "<br>".$texto;
            }
            decir(function($n){
                return "<br>Te estoy saludando desde una funcion anonima, soy $n<br>";
            })
            ?>    
</body>
</html>