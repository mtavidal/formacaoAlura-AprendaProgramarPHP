<?php
$notas = [
    10,
    5,
    8,
    3
];

//altera a variavel principal
//sort($notas);

$notasOrdenadas = $notas;
sort($notasOrdenadas);
echo "Desordenadas: ";
var_dump($notas);
echo "Ordenadas: ";
var_dump($notasOrdenadas);

//verificar tipo da variavel
echo gettype($notas);

//verifica se é array

is_array($notas); 

//verifica se o array é uma lista sequencial, com indice
array_is_list($notas);

// verifica se uma chave existe no array 
array_key_exists('chave', $array); //retorna verdadeiro ou falso

//isset verifica se a chave existe e não é nula
isset($array['chave']);

//verifica se o array contem um valor, v ou f, um terceiro parametro é o strict (v ou f) que considera o tipo na comparação ===
in_array('valor', $array); 

// retorna qual é a chave a partir de um valor, caso o valor não exista, ele devolve FALSO; um terceiro parametro é o strict (v ou f) que considera o tipo na comparação ===
array_search('valor', $array);    