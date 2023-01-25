<?php

// $conta1 = [
//     'titular' => 'Scarlet',
//     'saldo' => 1000
// ];

// $conta2 = [
//     'titular' => 'John',
//     'saldo' => 4000
// ];

// $conta3 = [
//     'titular' => 'Victor',
//     'saldo' => 500
// ];


$contasCorrente = [
    43273812842 => [
        'titular' => 'Scarlet',
        'saldo' => 1000
    ], 
    41670490823 => [
        'titular' => 'John',
        'saldo' => 4000
    ], 
    78412748215 => [
        'titular' => 'Helena',
        'saldo' => 500
    ]];
    
    //adiciona um novo item com o indice(cpf) indicado
    $contasCorrente[312932831255] = [
        'titular' => 'Janir',
        'saldo' => 1200
    ];

    //adiciona um item com o proximo indice disponivel, nesse caso, iria aumentar um digito no ultimo CPF (312932831255 + 1)
    $contasCorrente[] = [
        'titular' => 'Claudio',
        'saldo' => 1250
    ];

//com o foreach nao é necessário saber o indice para rodar o laço
foreach ($contasCorrente as $cpf => $conta) {
    echo $cpf . PHP_EOL;
    echo $conta['titular'] . PHP_EOL;
    echo $conta['saldo'] . PHP_EOL;
}

