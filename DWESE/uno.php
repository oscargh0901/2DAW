<!DOCTYPE html>
<html lang="en">
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
        //"\n" es un salto de línea dentro del código
        echo "Hola Mundo\n";
        //"<hr>" es un salto de línea en la  página web
        echo '<hr>Hola otra vez\n';
        //COMENTARIO DE UNA LINEA 
        /*Muchas lineas
        otro
        otra
        */
        //Variables-----------------------------------------------
        $nombre="Hola";
        $edad=34; 
        echo "<br>El nombre es $nombre".PHP_EOL;
        echo'<br>El nombre es $nombre';
        echo"<br>\"Entrecomillado\"";
        echo"<br>Seguimos probando 'comillas simples'";
        echo'<br>Comillas "dobles"';
        //Noooooo
        echo '<br>Comillas \'simmples\'';
        //Concatenando '.'
        echo '<br>Hola '.$nombre.' tu edad es '.$edad.PHP_EOL;
        echo"<br>FIN";
        $apellidos="Garcia Perez";
        $nombreCompleto=$apellidos.", ".$nombre;
        echo"<br>";
        echo $nombreCompleto;
        //gettype();
        echo "<br>La variable \$nombre es de tipo:".gettype($nombre);
        $nombre="34.56Almeria";
        echo "<br>La variable \$nombre es de tipo:".gettype($nombre);
        echo $res=$nombre+$edad;
        echo"<br>\$res=$res";
        echo "<br>La variable \$res es de tipo:".gettype($res);
        //-------------------------------------------------------------
        

        ?>
    </div> 
</body>
</html>