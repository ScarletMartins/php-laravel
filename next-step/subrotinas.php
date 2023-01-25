<?php

//subrotina - pedaço de execução de código isolado que pode ser executado em outro trecho
//uma funcion pode ser declarada sem parametros
//criaçao de uma funcionalidade/subrotina que recebe um parametro

// Uma função retorna um valor, ou seja, a chamada da função representa um valor após sua execução. Uma subrotina apenas executa um código isolado.
// A chamada de uma função no código passa a representar o valor que ela retorna. Com isso, podemos atribuir o retorno de uma função a uma variável, 
// por exemplo, ou até mesmo exibí-lo. Já uma subrotina apenas executa um código de forma isolada, sem retornar nenhum valor.


function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

$contasCorrente = [
    '43273812842' => [
        'titular' => 'Scarlet',
        'saldo' => 1000
    ], 
    '41670490823' => [
        'titular' => 'John',
        'saldo' => 4000
    ], 
    '78412748215' => [
        'titular' => 'Helena',
        'saldo' => 1500
    ]];
    
    //operaçao de saque
    $contasCorrente['78412748215']['saldo'] -= 500;
 
    foreach ($contasCorrente as $cpf => $conta) {
        exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']); //chamada da function com a impressão da mensagem + quebra de linha
    }