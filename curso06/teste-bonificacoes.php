<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\Gerente;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),
    3000
);
$umDiretor = new Diretor(
    'Ana Patricia',
    new CPF('985.654.321-10'),
    5000
);

$umEditor = new EditorVideo('Paulo',
    new CPF('456.987.231-11'),
    1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();