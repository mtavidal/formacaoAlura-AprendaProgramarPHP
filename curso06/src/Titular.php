<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
    
    public function recuperaEndreco(): Endereco
    {
        return $this->endereco;
    }

}