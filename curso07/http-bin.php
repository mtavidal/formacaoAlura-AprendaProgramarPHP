<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste de corpo do request'
    ]
]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);