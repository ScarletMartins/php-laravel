<?php

//PHP só trabalha com chaves em array associativo do tipo inteiro ou Strings
//qlqr outro tipo será convertido para String ou inteiro

$array = [
    1 => 'a',
    '1'=> 'b',
    1.5 => 'c',
    true => 'd'
];

//neste caso, a impressão será sempre o último dado, pois o PHP interpretada '1' como 1 e sobrepor a primeira variavel, o 1.5 será
//interpretado como inteiro e sobrepor o anterior e o boolean, enquanto "true" será tbm interpretado como 1 e sobrepor.