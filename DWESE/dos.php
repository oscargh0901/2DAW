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
        //bucles--------------
        //for()
        //do while
        //while
        //1.- FOR
        /*
        for($i=0; $i<10; $i++){
            echo "Linea $i<br>".PHP_EOL;
        }
        $i=0;
        do{
            echo "Linea".$i++."<br>".PHP_EOL;
        }while(i<10);
        //-----------------
        $i=0;
        while($i<10){
            echo "Linea ".$i++."<br>".PHP_EOL;
        }
        //-----------------------------------------------
        */
        //tabla
        $filas=5;
        $col=7;
        echo "<table border=2 cellpadding=2 cellspacing=2 align='center'>\n";
        for($f=0; $f<$col; $f++){
            echo"<tr>\n";
            for($c=0; $c<$col; $c++){
                echo "<td>Celda[$f][$c]</td>\n";
            }
            echo "<tr>\n";
        }
        echo "</table>\n";
        echo "<br><br><br>";
    ?>
    </div>
</body>
</html>