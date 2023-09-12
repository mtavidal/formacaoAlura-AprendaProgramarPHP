<?php 
require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$vinicius = new Titular(new Cpf('123.456.789-10'), nome: 'Vinicius Dias');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(200);

$patricia = new Titular(new Cpf('698.549.548-10'), nome: 'Patricia');
$primeiraConta = new Conta($patricia);
$segundaConta->deposita(500);

var_dump($primeiraConta);
var_dump($segundaConta);
$primeiraConta->saca(150);
$primeiraConta->transfere(20, $segundaConta);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL;
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();