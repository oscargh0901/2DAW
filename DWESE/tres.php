<!DOCTYPE html>
<?php
    $b="Vuelvo a ser b";
    function saludo(){
        echo "<br>Hola Mundo<br>";
    }
    //-----------------------
    function saludo1(String $n){
        echo "Me ha llegado un parámetro de tipo: ".gettype($n);
        echo "<br>Hola $n<br>";
    }
    function saludo2($n):String{
        return 14;
    }
    //-----------------------------------------
    //Le indicammos un valor por defecto "Sin nombre" para cuando no le pasemos un parámetro
    function saludo3($n="Sin nombre"){
        echo "<br> Hola $n<br>";
    }
    function saludo4($n="Sin nombre", $e="Sin edad"){
        echo "Tu nombre es: $n<br>";
        echo "Tu edad es: $e<br>";
    }
    //------------------------
    //Funciones con un numero variable de parametros
    function saludo5(){
        $numero=func_num_args();
        echo "Has pasado $numero argumentos<br>";
        for($i=0; $i<$numero; $i++){
            echo "El argumento $i es: ".func_get_arg($i)."<br>";
        }
    }
    function saludo6(...$parametros){
        echo"<br>";
        var_dump($parametros);
        $parametros[0];
    }
?>
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
        $a="Variable a";
        echo "La variable \$a=$a<br>";
        echo "La variable \$b=$b<br>";
        // $b="Variable b";
        saludo();
        $nombre="Manolo";
        saludo1("Felipe");
        saludo1("$nombre");
        saludo1(1234);
        //----------------------------------
        echo gettype(saludo2("ass"));
        //---------------------------------
        echo saludo3($nombre);
        echo saludo3();
        //-------------------------
        saludo4("Manolo", 23)
        saludo4();
        saludo4("Manolo");
        saludo(45);
        //----------------------------------
        saludo5("Hola", 34, "Almeria");
        saludo5();
        saludo5("Pedro", 45.67, "ALmeria", "España");
        //----------------------------------
        saludo6("Hola", 34, "Almeria");
        saludo6();
        saludo6("Pedro", 45.67, "ALmeria", "España");
    ?>
    </div>
</body>
</html>