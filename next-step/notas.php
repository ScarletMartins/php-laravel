<?php

$notas = [
    'Ana' => null,
    'Marcos' => 10,
    'John' => 8,
    'Scarlet' => 9,
    'Alice' => 10
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

//verifica se a chave existe
//2 parametros - a chave buscada e o array de busca
echo 'Marcos fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Marcos', $notas));

//isset - verifica se a chave existe e se seu valor é diferente de nulo
echo 'Ana fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Ana']));

//in_array - verifica se o valor existe
echo 'Há notas 10? ' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10? ' . PHP_EOL;
echo array_search(10, $notas);