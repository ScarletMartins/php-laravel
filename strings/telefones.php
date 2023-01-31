<?php

$telefones = ['(11) 99999 - 9999', '(12) 99999 - 9999', '(13) 99999 - 9999'];

//recebe 2 parametros - string que será o clue que unirá os dados e o array
echo implode(PHP_EOL, $telefones) . PHP_EOL;

$csv = ',Scarlet Martins,27,.' . PHP_EOL;

//'aparar' - remove caracteres por parametro apenas das extremidades
echo trim($csv, ',.');
//rtrim - apara o lado direito
//ltrim - apara o lado esquerdo

//Conceito - String númerica
//String que contém apenas números - aceita espaço no início e fim, nao reconhece caso o primeiro caracter seja letra, warning com caracter letra 
//no final e nao aceita espaçamento no meio

$anoNascimento = '1995';

echo $idade = 2023 - $anoNascimento . PHP_EOL;

