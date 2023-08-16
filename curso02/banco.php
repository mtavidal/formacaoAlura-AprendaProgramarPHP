<?php

function exibeMensagem(string $mensagem) {
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorSaque) : array {
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("$conta[titular], seu saldo é Insuficiente.");
    } else {
        $conta['saldo'] -= $valorSaque;
        exibeMensagem("Saque realizado! $conta[titular], seu saldo é $conta[saldo]."); 
     
    } 
    return $conta;
}

function depositar(array $conta, float $valorDeposito) : array {
    if ( $valorDeposito > 0) {
         $conta['saldo'] += $valorDeposito;
        exibeMensagem("Deposito realizado! $conta[titular], seu saldo é $conta[saldo]."); 
    } else {
        exibeMensagem('Valores de depósitos precisam ser positivos');
    }
   
    return $conta;
}

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

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . "-" . $conta['titular'] . "-" . $conta['saldo']);
}