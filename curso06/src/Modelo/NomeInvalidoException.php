<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "O nome $nomeTitular é inválido. O nome precisa ter pelo menos 5 caracteres";
        parent::__construct($mensagem);
    }
}
