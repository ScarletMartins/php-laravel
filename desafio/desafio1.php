<?php

//imprimir números ímpares de 0 à 100

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        echo $i . PHP_EOL;
    }
}