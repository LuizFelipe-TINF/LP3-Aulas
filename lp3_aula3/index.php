<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 3</title>
</head>
<body>
    
    <h1>
        LP3 Aula 3
    </h1>


    <?php

    //par

        for($i = 0; $i < 10; $i+=2){

            echo "$i <br>";

        }

     //ímpar

        for($i = 1; $i < 10; $i+=2){

            echo "$i <br>";

        }

    ?>


    <?php

    //ímpar em While

        $i = 1;

        while( $i < 10 ){
        
            echo "$i <br>";
            $i+=2;
        }

    ?>


<h4>Múltiplos de 3 entre 0 e 100</h4>

    <ul>
        
    <?php for($i = 0; $i < 100; $i++){
        
        if($i % 3 == 0) { ?>
        <li>
            Número: <?= "$i"; ?>
        </li>
        <?php }
    } ?>

    </ul>

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