<?php

$nome = 'campo';
?>
<input type="text" name="<?php echo addslashes($nome); ?>"/>

//converte qlqr coisa que possa ser um html valido para codigo html
htmlentities();

<?php

$texto = 'Texto teste qualquer coisa poxa e caramba';

//o que - pelo o que - onde
echo str_replace(
    ['poxa', 'caramba'],
    '***', //['***', '----']
    $texto
) . PHP_EOL;

//translate - traduz um caracter pra outro - substitui todos os caracteres      
echo strtr($texto, 'poxa', '***@') . PHP_EOL; //-> Te*t* teste qu@lquer c*is@ ***@ e c@r@mb@

