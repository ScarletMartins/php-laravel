<?php

$contador = 1;

//utilizar while em condições de limite dinâmico
// while ($contador <= 15) {
//     echo "#$contador" . PHP_EOL;
//     $contador = $contador + 1;
// }

//utilizar for para condições que se sabe o limite
for ($contador = 1; $contador <= 15; $contador++ ) {
        echo "#$contador" . PHP_EOL;
}


//continue pula uma iteração de loop
//break interrompe uma interação de loop