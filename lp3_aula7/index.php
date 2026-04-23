<?php 

    require_once "Carro.php";

    $c1 = new Carro();

    $c1->modelo = "Ferrari";
    $c1->cor = "Vermelho";


    $c2 = new Carro();

    $c2->modelo = "Fiat";


    echo "<pre>";
    print_r($c1);
    print_r($c2);

    $c1->buzinar();

    $c2->acelerar();

    $c1->frear();

    $c2->frear();




?>