<?php

//cálculo de IMC = pessoa/altura ao quadrado

$peso = 70;
$altura = 1.63;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} else if ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";
