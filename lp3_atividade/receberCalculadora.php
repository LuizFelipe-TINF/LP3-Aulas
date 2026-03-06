<?php

$Hora = $_POST["txtHoras"];
$Pts;
$Dinheiro;

if ($Hora <= 10) {
    $Pts = $Hora * 2;
} else if ($Hora > 10 || $Hora <= 20) {
    $Pts = $Hora * 5;
} else if ($Hora > 20) {
    $Pts = $Hora * 10;
}

$Dinheiro = $Pts * 0.05;

echo "Você obteu $Pts pontos e faturou R$ $Dinheiro";










?>