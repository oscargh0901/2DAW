<!DOCTYPE html>
<html lang="en">
    <?php   
        function prueba(){
            $nombre="Juan Andres";
        }
        function prueba1(){
            global $nombre;
            $nombre="IES ALANDALUS";
        }
        //array globals
        function prueba2(){
            $globals["nombre"]="Te cambie el nombre";
        }
        function prueba3(){
            static $a=0;
            return ++$a;
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo1</title>
</head>
<body style="background:cadetblue;">
    <h3 class="text-center mt-3">Ejemplos PHP</h3>
    <div class="container mt-3">
    <?php
        $nombre="Pedro Santamaria"; //variable global
        $edad=23; //variable global
        echo "antes de prueba \$nombre=$nombre<br>";
        prueba();
        echo "despues de prueba() \$nombre=$nombre<br>";
    ?>
</body>
</html>