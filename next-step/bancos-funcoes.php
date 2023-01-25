<?php

//podemos explicitar os tipos dos parâmetros que receberemos nas subrotinas e funções, e também o tipo do retorno da função.
//Quando explicitamos o tipo, aumentamos a segurança do código e facilitamos a procura por erros.
function sacar(array $conta, float $valorSaque):array 
{
    if ($valorSaque > $conta['saldo']) {
        echo "Saldo insuficiente" . PHP_EOL;
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}

function deposito(array $conta, float $valorDeposito):array 
{
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        echo "Valor de depósito inválido. Informe um valor positivo!";
    }
    
    return $conta;
}