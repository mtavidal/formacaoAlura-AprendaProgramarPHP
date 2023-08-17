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
