<?php

//tuplas - estrutura da dados
//pequeno conjunto de elementos onde a posiçao deles significam algo

$dados = [
    'nome' => 'Scarlet', 
    'nota' => 9,
    'idade' => 27
];

//antes do operador de atribuiçao pra criar novas variaveis
//list('nome'=> $nome, 'nota'=> $nota, 'idade'=> $idade) = $dados; //[$nome, $nota, $idade] = $dados;

//percorre um array, verifica as chaves e todas as chaves viram uma variavel
//nunca utilizar em dados não confiaveis, como um input de usuario
extract($dados);

//pega variaveis e transforma em array, chave é o nome da variavel e o valor é o valor da variavel
compact('nome', 'nota', 'idade');

var_dump($nome, $nota, $idade);

//PRINCIPAIS FUNÇOES
//recebe um array e devolve um novo array com elementos filtrados - sem alguns elementos
array_filter();

//recebe um array e devolve um novo array mapeado com valores modificados
array_map();

//recebe um array e reduz a lista a um unico elemento - por ex. soma de arrays
array_reduce();

//function anonima - function sem nome
//precisa ser atribuida a uma variavel ou passada por parametros