<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    
<h4> Contagem de 100 a 0</h4>


    <?php

        for($i = 100; $i >= 0; $i-=5){

            echo "$i <br>";

        }

    ?>

<h4> Média aritmética dos numeros entre 13 e 73</h4>

    <?php

        $m = 0;
        $n = 0;
        for($i = 14; $i < 73; $i++){

        $m = $i + $m;
        $n++;
        
        }
       
        $r;
        $r = $m / $n ;
        echo "$r";
    ?>


<h4> Contagem de 30 até 1 com divisíveis por 4 entre []</h4>

    <?php

        for($i = 30; $i >= 1; $i-=1){

        echo " $i ";
        if( $i % 4 == 0) {
        echo "[ $i] ";
        }

        }
       
    ?>



</body>
</html>