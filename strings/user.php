<?php

$nome = 'Scarlet Martins';
$email = 'scarletmartins@gmail.com';

//extrai um pedaço de uma string
//informar onde buscar, caracter de inicio e fim
//substr($email, 0, 14);

//retorna o tamanho de uma string em bytes
strlen();

//strpos busca a posicao de um caracter
$posicaoArroba = strpos($email, '@');

//retorna outra string com o conteudo em letras maisculas
strtoupper();

//retorna outra string com o conteudo em letras minusculas
strtolower();

//multibyet string - cada caractere dela pode ocupar mais de um byte
mbstring();

echo substr($email, 0, $posicaoArroba) . PHP_EOL;
echo substr($email, $posicaoArroba + 1) . PHP_EOL;

//2 parametros - separador e string que sera separada
//terceiro parametro (limit), indica o limite do conteúdo de saída do array
//explode(' ', $nome);

[$nome, $sobrenome] = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobreome: ' . $sobrenome . PHP_EOL;