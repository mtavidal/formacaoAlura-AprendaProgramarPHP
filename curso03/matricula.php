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