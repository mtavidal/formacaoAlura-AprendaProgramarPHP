<?php

$url = 'https://alura.com.br';

if (str_starts_with($url,'https')){
    echo 'segura';
} else {
    echo 'não é segura';
}

echo PHP_EOL;

if (str_ends_with($url,'.br')){
    echo 'é do Brasil';
} else {
    echo 'não é do Brasil';
}