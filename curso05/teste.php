<?php 
require 'src/Conta.php';

$primeiraConta = new Conta;
$primeiraConta->saldo = 200;
$primeiraConta->cpfTitular = "123.456.789-87";
$primeiraConta->nomeTitular = "Manuela Vidal";

$segundaConta = new Conta;
$segundaConta->saldo = 500;
$segundaConta->cpfTitular = "987.654.321-10";
$segundaConta->nomeTitular = "Danilo Vidal";

$c = $segundaConta;
$c->saldo = 2000;
var_dump($segundaConta);
$primeiraConta->sacar(150);

var_dump($primeiraConta);
var_dump($segundaConta);
