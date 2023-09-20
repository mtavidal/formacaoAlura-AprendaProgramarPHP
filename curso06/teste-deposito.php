<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeInvalidoException;

require_once 'autoload.php';

try{
    $contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-01'),
        'Vini',
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);
}catch(InvalidArgumentException $ex){
    echo "Cpf inválido." . PHP_EOL;
    echo $ex->getMessage();
}catch(NomeInvalidoException $ex){
    echo "Nome inválido." . PHP_EOL;
    echo $ex->getMessage();
}

// try {
//     $contaCorrente->deposita(-100);
// } catch (InvalidArgumentException $exception) {
//     echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
// }
