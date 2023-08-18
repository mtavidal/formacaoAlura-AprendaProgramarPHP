<?php

//include 'funcoes.php'; include deve chamar arquivos que não são essenciais para o programa, pois ele só da warning, caso não encorntre o arquivo, e tenta rodar
// já o require dá erro. para a execução. o once, adiociona uma unica vez
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Manuela',
        'saldo' => 1000
    ], 
    '123.456.789-11' => [
        'titular' => 'Danilo',
        'saldo' => 10000
    ], 
    '123.456.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 600);
$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 600);

$contasCorrentes['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], 100);
$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], -1000);

// remove variaveis da memoria, ou seja remove itens de uma lista
unset($contasCorrentes['123.456.789-11']);

// echo "<h1>Contas atualizadas:</h1>";
// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta){
//     //list('titular' => $titular, 'saldo' => $saldo) = $conta;
//     //['titular' => $titular, 'saldo' => $saldo] = $conta;
//     //exibeMensagem( "$cpf - {$conta['titular']} - {$conta['saldo']}");
//     //exibeMensagem( "$cpf - $titular - $saldo");
//     exibeConta($conta);
// }
// echo "</ul>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas atualizadas:</h1>
    <ul>
        <?php
foreach ($contasCorrentes as $cpf => $conta){

 exibeConta($conta);
}
?>
    </ul>
</body>
</html>