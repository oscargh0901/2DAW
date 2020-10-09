<!DOCTYPE html>
<?php
    function primo($num){
        if($num == 1 || $num == 2 || $num == 3 || $num == 5 || $num == 7){
            return true;
        }

        if($num >= 8 ){
            if ($num%2==0 || $num%3==0 || $num%5==0) {
                return false;
            }
        }

        if($num >= 8 ){
            if ($num%2>=1 || $num%3>=1 || $num%5>=1) {
                return true;
            }
        }
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
        //Saber si un numero es primo. 7
        $np=1;
        if(primo($np)){
            echo " el numero $np es primo";
        }else{
            echo " el numero $np no es primo";
        }     
        
    ?>
</body>
</html>