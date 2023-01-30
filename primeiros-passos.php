<?php

//DOCUMENTAÇAO -  https://www.php.net/docs.php
//Níveis de erro - https://www.php.net/manual/en/errorfunc.constants.php

//PHP é uma linguagem dinamicamente tipada. Descobre o tipo de dados pelo seu valor.
//Quando usado aspas simples, o PHP entende que dentro tem apenas texto, sem necessidade de interpretaçao

// echo "Olá mundo!!"; imprime a saída de dados

$idade = 16;
$salario = 1321.31; 
$divisao = 10/3; 
$texto = "Olá mundo!";
//$boolean = true/false;
$acompanhado = 1;


// gettype() busca a tipagem da váriavel
// is_array() verifica se a variavel é um array
// array_is_list() retorna true se o array for numerico, com indice iniciado em 0 e sequencial 

//echo 'Olá mundo, minha idade é ' . $idade . ' anos'; //o . faz a concatenação com aspas simples
//echo "Olá mundo. \n\tEu tenho $idade anos"; //aspas duplas nao precisa de concatenador, apenas a menção a variavel

echo "Proibida entrada de menores de 18 anos. A partir de 16 anos, entrada liberada com acompanhante maior de idade" . PHP_EOL . PHP_EOL;

if ($idade >= 18) {
    echo "Idade: $idade anos. Entrada liberada";
} else if ($idade >= 16){
    if ($acompanhado > 1) {
        echo "Idade: $idade anos. Entrada liberada com acompanhante maior de idade";
    }else {
        echo "Idade: $idade anos. Entrada não liberada, necessário acompanhante maior de idade";
    }
} else {
    echo "Idade: $idade anos. Entrada não liberada";
}