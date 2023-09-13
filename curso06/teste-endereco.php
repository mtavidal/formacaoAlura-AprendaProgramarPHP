<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;

require_once 'autoload.php';

$umEndereco = new Endereco(
    'Petrópolis',
    'bairro qualquer',
    'Minha rua',
    '71b'
);
$outroEndereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);
$umEndereco->cidade="Salvador";

echo $umEndereco . PHP_EOL;
echo $umEndereco->cidade . PHP_EOL;

$desenvolvedor = new Desenvolvedor('Vinicius', new Cpf('123.456.789-10'), 2000);
echo $desenvolvedor->nome . PHP_EOL;;

exit();