<?php

$telefones = ['(11) 99999 - 9999', '(12) 99999 - 9999', '(13) 9999 - 9999'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}/', 
    $telefone,
    $correspondencia,
);

    var_dump($correspondencia);
    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    //o que - pelo o que - onde
    echo preg_replace(
        '/\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
