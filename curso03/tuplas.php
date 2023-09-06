<?php
$dados = ['Manuela', 10, 34];
//list($nome, $nota, $idade) = $dados;
[$nome, $nota, $idade] = $dados;

$outrosDados = [
    'nome1' => 'Manuela',
    'nota1' => 10,
    'idade1' => 34,
];
//percorre o array e transforma cada chave em uma variavel
extract($outrosDados);

//pega varias variaveis e transforma num array
compact('nome1', 'nota1', 'idade1');