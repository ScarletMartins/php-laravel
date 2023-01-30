<?php

//grui de ordenacao - https://jssantos.net/2019/01/um-guia-das-funcoes-de-ordenacao-de-arrays-do-php/#:~:text=asort%20e%20arsort,associa%C3%A7%C3%B5es%20entre%20chaves%20e%20valores.

//sort - ordena do menor para o maior valor, perdendo o indice
//rsort - ordena do maior para o menor valor, perdendo o indice
//asort - ordena do menor para o maior valor, mantendo o indice
//arsort - ordena do maior para o menor valor, mantendo o indice
//ksort - ordena do menor para o maior indice, mantendo o valor
//krsort - ordena do maior para o menor indice, mantendo o valor

//usort - espera dois parametros
//o 1 é o array que vai ser ordenado e o segundo é a funcao que ensina como vai ordenar - essa funcao precisa retonar um inteiro
//esse inteiro precisa menor que 0 se o 1 parametro precisar vir antes do array ordenado
//retorna maior que zero se o 2 parametro precisar vir antes e retorna 0 se a ordem nao importar

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Alexandre',
        'nota' => 9,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{

    // if ($nota1['nota'] > $nota2['nota']) {
    //     return -1;
    // }

    // if ($nota2['nota'] > $nota1['nota']) {
    //     return 1;
    // }
    
    // return 0;

    //esta linha executa a mesma logica do codigo acima, com o operador 'espaçonave'<=>
    //se o 1 elemento for menor que o 2 segundo retorna -1, se for maior retorna 1 e sendo igual retorna 0
    //para ordenacao descrecente, inverter os elementos
   return $nota1['nota'] <=> $nota2['nota'];
    
};

usort($notas, 'ordenaNotas');
var_dump($notas);


// //var_dump - mostra o resultado de uma variavel
// echo 'Desordenadas:';
// var_dump($notas);

// $notasOrdenadas = $notas;
// sort($notasOrdenadas); //sort - motifica os valores de uma variavel por ordem crescente/alfabetica - espera uma referencia e altera a variavel passada, 
// //para nao alterar o dado original, atribuir a uma segunda variavel

// echo 'Ordenadas:';
// var_dump($notasOrdenadas);
