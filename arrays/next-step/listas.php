<?php

$idadeList = [21, 31, 42, 21, 54, 38, 29];
// $determinadaIdade = $idadeList[3]; || acessa um item especifico

$idadeList[count($idadeList)] = 33; //adiciona um novo item no indice indicado
$idadeList[] = 20; //ao nao informar nenhum indice, o item é incluido no proximo indice disponivel

//funcao que recebe variaveis e retorna dados pelo indice do array
// list($idadeScarlet, $idadeJohn, $idadeAlice) = $idadeList;
[$idadeScarlet, $idadeJohn, $idadeAlice] = $idadeList;

// echo "Tamanho da lista: ";
// echo count($idadeList); || imprime o tamanho do array
// echo PHP_EOL;

//loop lista || lista todo o array
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}