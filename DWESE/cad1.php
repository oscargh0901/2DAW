<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Ejemplo1</title>
</head>
<body style="background:cadetblue;">
    <h3 class="text-center mt-3">Cadenas PHP</h3>
    <div class="container mt-3">
    <?php
        $cad1="hola mundo, Adios mundo";
        //La longitug
        echo " La longitud de \"$cad1\" es: ".strlen($cad1);
        //Podemos recorrerla con un for
        echo "<br>";
        for($i=0; $i<strlen($cad1); $i++){
            echo $cad1[$i]. " - ";
        }
        //Manipular cadenas
        echo "<br>Mayusculas<br>";
        echo strtoupper($cad1);
        echo "<br>Minusculas<br>";
        echo strtolower($cad1);
        echo "<br>Primera letra mayuscula<br>";
        echo ucfirst($cad1);
        echo "<br>Primera letra mayuscula de cada palabra<br>";
        echo ucwords($cad1);
        //----------------------------------------------------------------
        $cad2= "    Hola Mundo";
        $lcad2=ltrim($cad2);
        $rcad3=rtrim($cad2);
        $cad2Limpia=trim($cad2);
        echo "<br>";
        echo "La longitud de '{$cad2}' es: ".strlen($cad2);
        echo "<br>";
        echo "La longitud de '{$lcad2}' es: ".strlen($cad2);
        echo "<br>";
        echo "La longitud de '{$rcad3}' es: ".strlen($cad2);
        echo "<br>";
        echo "La longitud de '{$cad2Limpia}' es: ".strlen($cad2);
        //Rellenar cadenas
        $cad3="Hola mundo";
        $cadenaRellena = str_pad($cad3, 30, "0", STR_PAD_LEFT);
        echo "<br>$cadenaRellena<br>";
        $cadenaRellena = str_pad($cad3, 30, "0", STR_PAD_RIGHT);
        echo "<br>$cadenaRellena<br>";
        $cadenaRellena = str_pad($cad3, 30, "0", STR_PAD_BOTH);
        echo "<br>$cadenaRellena<br>";
        //Algunas funciones de busqueda dentro de cadenas
        echo "<br>";
        $mail="oscargh0901@gmail.com";
        //
        echo "<br>";
        echo "@ esta en la posicion: ".strpos($mail, "@");
        //me devuele la subcadena desde el carcater buscado al final
        echo "<br>";
        echo "strstr{\$mail,0}=".strstr($mail, "0");
        echo "<br>strstr{\$mail, @} puesto a true= ".strstr($mail, "@", true);
        //------------------------strpos vs strrpos
        $cad="Hola mundo";
        echo "<br>La primera aparicion de 0 es: ".strpos($cad, "0", 3);

        ?>
</body>
</html>