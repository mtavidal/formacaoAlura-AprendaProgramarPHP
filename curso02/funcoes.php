<?php

function exibeMensagem(string $mensagem) {
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorSaque) : array {
    titularComLetrasMaiusculas($conta);
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

function exibeConta (array $conta) {
      ['titular' => $titular, 'saldo' => $saldo] = $conta;
     echo "<li> Titular: $titular. Saldo: $saldo </li>";
}

//exemplo de passagem de parametro por referencia (&, altera diretamente no endereço da variavel)
function titularComLetrasMaiusculas (array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}