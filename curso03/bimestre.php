<?php

$notasBimestre1 = [
    'Manuela' => 6,
    'Vinicius' => 8,
    'João' => 10,
    'Ana' => 7
];

$notasBimestre2 = [
    'Manuela' => 5,
    'Vinicius' => 9,
    'João' => 10,
    'Ana' => 7,
    'Maria' => 3
];

// diferença entre arrays, leve em consireção os valores, devolve um array com todos os elementos do primeiro parametro que não estao no segundo parametro.
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//agora compara as chaves
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// leva em consideração valor e chave
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

$alunosFaltantes = array_diff_key($notaBimestre1, $notaBimestre2);
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));

//array_combine, formar arrays a partir de dois, um valor outro o indice, os arrays precisam ser do mesmo tamanho.
$nomesAlunos = array_keys($alunosFaltantes);
$notaAlunos = array_values($alunosFaltantes);
var_dump(array_combine($notaAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes)); //inverte chave e valor