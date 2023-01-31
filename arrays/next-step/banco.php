<?php

//para importar um arquivo no outro é possível usar include ou require
//Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue apenas avisando o erro.
//require_once garante que o arquivo será incluído uma única vez

require_once 'bancos-funcoes.php'; 

//array associativo - mapea dados de uma lista por um indice
$contasCorrente = [
    '432.738.128-42' => [
        'titular' => 'Scarlet',
        'saldo' => 1000
    ], 
    '416.704.908-23' => [
        'titular' => 'John',
        'saldo' => 4000
    ], 
    '784.127.482-15' => [
        'titular' => 'Helena',
        'saldo' => 1500
    ]];

    //removendo dados
    unset($contasCorrente['784.127.482-15']);
    
    //operaçao de saque
    $contasCorrente['416.704.908-23'] = sacar($contasCorrente['416.704.908-23'], 500);

    foreach ($contasCorrente as $cpf => $conta) {
        echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
    }

    //operacao de deposito
    $contasCorrente['432.738.128-42'] = deposito($contasCorrente['432.738.128-42'], 1200);

    echo "-----------------------" . PHP_EOL;

    foreach ($contasCorrente as $cpf => $conta) {
        echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
    }

    echo "-----------------------" . PHP_EOL;

    //string simples - para exibir o valor basta retirar todas as aspas - só é possível dentro da string
    foreach ($contasCorrente as $cpf => $conta) {
        echo ("$cpf $conta[titular] $conta[saldo]") . PHP_EOL;
    }

    echo "-----------------------" . PHP_EOL;

    //string complexa - envolver as strings em chaves
    foreach ($contasCorrente as $cpf => $conta) {
        echo ("$cpf {$conta['titular']} {$conta['saldo']}") . PHP_EOL;
    }

