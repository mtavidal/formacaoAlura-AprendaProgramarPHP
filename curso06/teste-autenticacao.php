<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$gerente = new Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
$titular = new Titular(new Cpf('123.456.789-10'), 'Vinicius Dias', $endereco);

$autenticador->tentaLogin($diretor, '4321');
$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '4321');
$autenticador->tentaLogin($titular, 'abcd');