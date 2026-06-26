<?php

require_once "Funcionario.php";
require_once "Professor.php";
require_once "TecnicoAdministrativo.php";

$professor = new Professor(
    1, "Ana Beatriz Souza", "12345678900", 5000.00, 40, true, 120.00, "Doutorado", 20, true);

$tecnico = new TecnicoAdministrativo( 2, "Carlos Eduardo Lima", "98765432100", 3000.00, 40, true, 500.00, "Laboratório", "Pleno", "Noturno");


echo "PROFESSOR <br>";

$professor->demitir();
$professor->admitir();

$professor->aplicarAumento(10);

echo "Salário calculado: R$ " . $professor->calcularSalario() . "<br>";
echo "Situação: " . ($professor->verificarSituacao() ? "Ativo" : "Inativo") . "<br>";
echo "Bônus: R$ " . $professor->calcularBonus() . "<br>";
echo $professor->gerarRelatorio() . "<br>";


echo "<br> TÉCNICO ADMINISTRATIVO <br>";

$tecnico->demitir();
$tecnico->admitir();

$tecnico->aplicarAumento(15);

echo "Salário calculado: R$ " . $tecnico->calcularSalario() . "<br>";
echo "Situação: " . ($tecnico->verificarSituacao() ? "Ativo" : "Inativo") . "<br>";
echo "Adicional Insalubridade: R$ " . $tecnico->calcularAdicional() . "<br>";
echo "Crachá: " . $tecnico->gerarCracha() . "<br>";