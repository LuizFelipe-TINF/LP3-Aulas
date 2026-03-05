<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    
<h4>Contagem 100 a 0</h4>

<?php


    for($i = 100; $i >= 0; $i-=10){

        echo "$i <br>";

    }


?>

<h4>100 a 0  impares marcando diviseis por 5 </h4>


<?php

for($i = 99; $i >= 1; $i --){
    
    if( $i % 2 == 1){


    if( $i % 5 == 0){

        echo " [$i] ";

    } else {
        echo " $i ";
    }
    
    }

}

?>

<h4>Contagem 150 145 ... 0</h4>

<?php


    for($i = 150; $i >= 0; $i-=5){

        echo "$i <br>";

    }


?>

<h4>Usando While</h4>

<?php


        $i = 150;

        while( $i>= 0 ){
        
            echo "$i <br>";
            $i -= 5;
        }

    ?>








</body>
</html>