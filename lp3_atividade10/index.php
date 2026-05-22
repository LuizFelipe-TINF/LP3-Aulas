<?php

require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";


$cc1 = new ContaCorrente();
$cc1->numero = 123;
$cc1->nomeTitular = "João";
$cc1->agencia = 5;
$cc1->saldo = 500;
$cc1->dataAbertura = "29/11";
$cc1->status = 1;

$cc1->depositar(500);
$cc1->sacar(150);
$cc1->consultarSaldo();


$cp1 = new ContaPoupanca();
$cp1->numero = 123;
$cp1->nomeTitular = "João";
$cp1->agencia = 5;
$cp1->saldo = 500;
$cp1->dataAbertura = "29/11";
$cp1->status = 1;



$cc2 = new ContaCorrente();
$cc2->numero = 456;
$cc2->nomeTitular = "Miguel";
$cc2->agencia = 10;
$cc2->saldo = 1000;
$cc2->dataAbertura = "10/05";
$cc2->status = 1;


$cp2 = new ContaPoupanca();
$cp2->numero = 456;
$cp2->nomeTitular = "Miguel";
$cp2->agencia = 10;
$cp2->saldo = 1000;
$cp2->dataAbertura = "10/05";
$cp2->status = 1;




$cc1->transferir(500, $cc2);

echo "<pre>";


print_r($cc1);
print_r($cp1);

print_r($cc2);
print_r($cp2);