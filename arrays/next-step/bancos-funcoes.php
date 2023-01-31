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

// Quando passamos uma variável comum por parâmetro para uma função, o que o PHP faz é criar uma cópia do valor dela 
// e enviar para a função em questão. Isso faz com que se quisermos alterar o valor da variável original, não seja possível. 
// Uma das soluções possíveis é passar a referência para a variável, ou seja, ao invés de passar seu valor, passar o endereço 
// onde esta variável está armazenada na memória.

