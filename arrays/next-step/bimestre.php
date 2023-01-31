<?php

$notasBimestre1 = [
    'Ana' => 7,
    'Marcos' => 10,
    'John' => 8,
    'Scarlet' => 9,
    'Alice' => 10
];

$notasBimestre2 = [
    'Marcos' => 7,
    'John' => 6,
    'Scarlet' => 6,
    'Alice' => 8
];

//retorna um novo array contendo os elementos que contenham no primeiro array e nao existem nos demais arrays passados
//a compraçao é feita por valor e nao pode indice
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//retorna um novo array com comparaçao por indice e nao valor
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

//compara chave E valor
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

//recebe um array e devolve suas chaves
array_keys();

//recebe um array e devolve seus valores
array_values();

//recebe dois arrays de mesmo tamanho e combina alterando chave e valor
array_combine();

//recebe um array e inverte chave e valor
array_flip();

//une o valor de um ou mais arrays
array_merge();

//recebe um array de referencia(onde adc elementos) e recebe elementos que devem ser adicionados
array_push();

//adiciona elementos no início do array
array_unshift();

//remove e retorna o primeiro elemento do array
array_shift();

//remove e retorna o último elemento do array
array_pop();

//com arryas o operador '+' é um operador de união
//com chaves numericas nao sobrepoe valor, mantendo o primeiro 

//desempacotamento de arrays - pode ser feito dentro de outro array
//traz cada valor do array de forma independente