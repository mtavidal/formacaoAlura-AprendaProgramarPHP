<?php

$array = [
    1 => 'a',
    "1" => 'b',
    1.4 => 'c',
    true => 'd'
];

foreach ($array as $index => $item) {
    echo $index . '->' .$item .PHP_EOL;
}

//extra

$placas = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'JMP-2312' => [
        'marca' => 'FIAT',
        'modelo' => 'UNO'
    ],
    ];

foreach ($placas as $placa => $carro) {
    echo "$placa => $carro[modelo]" .PHP_EOL;
}