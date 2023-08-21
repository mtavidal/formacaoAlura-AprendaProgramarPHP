<?php
$notas = [
    [
        'aluno' => 'Manuela',
        'nota' => 10,
    ],
    [
        'aluno' => 'Danilo',
        'nota' => 8,
    ],
    [
        'aluno' => 'Maria',
        'nota' => 9,
    ],
];

function ordenaNotas (array $nota1, array $nota2): int {
    return $nota2['nota'] <=> $nota1['nota'];
    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }
    // if ($nota1['nota'] < $nota2['nota']) {
    //     return 1;
    // }
    // return 0;
}

usort($notas, 'ordenaNotas');


var_dump($notas);