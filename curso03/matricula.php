<?php

$alunos2021 = [
    'Manuela',
    'Vinicius',
    'João',
    'Ana'
];

$alunos2022 = [
    'patricia',
    'joana',
    'marcos',
    'Ana'
];

$alunosTotais = array_merge($alunos2021, $alunos2022);
var_dump($alunosTotais);

// adiciona no final do array
array_push($alunos2022, 'alice', 'bob');
$alunos2022[] = 'maria';

//adiciona no inicio do array
array_unshift($alunos2022, 'Jose');
var_dump($alunos2022);

//remove do inicio
array_shift($alunos2022);
//remove do final
array_pop($alunos2022);