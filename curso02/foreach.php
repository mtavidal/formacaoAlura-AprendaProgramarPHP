<?php

$contasCorrentes = [
    12345 => [
        'titular' => 'Manuela',
        'saldo' => 1000
    ], 
    67981 => [
        'titular' => 'Danilo',
        'saldo' => 10000
    ], 
    101112 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes[852369] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];
$contasCorrentes[] = [
    'titular' => 'Claudia2',
    'saldo' => 2000
];
// em caso de indice string, tem que dizer qual é

foreach ($contasCorrentes as $indice => $conta){
    echo $indice . "-" . $conta['titular'] . PHP_EOL;
}