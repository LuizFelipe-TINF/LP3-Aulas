<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP3 Aula 2</title>
</head>
<body>
    
<h1>
    LP3 Aula 2
</h1>

<?php

    $massa = 5;
    echo "Isso é um texto: $massa <br>";
    echo '$massa <br>';
    echo 4 . "<br>";
    echo $massa;

?>

<h3>
    Lista
</h3>

<ul>
    
    <?php 
        if($massa % 2 == 0){
            $resp = "par";
        } 
        else{
            $resp = "impar";
        }
    ?>

    <li>
        A variável massa é <?php echo $resp; ?>
    </li>

    <?php if($massa % 2 == 0) { ?>

        <li>A variável massa é par</li>

    <?php } else { ?>

        <li>A variável massa é ímpar</li>
        
    <?php } ?>
</ul>

</body>
</html>