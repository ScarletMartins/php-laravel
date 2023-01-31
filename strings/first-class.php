<?php

$nome = 'Scarlet Martins';

//espera dois parametros - onde buscar e o que buscar, retorna true se achar e false caso negativo
str_contains($nome, 'Martins');

$url = 'https://google.com.br';

//verifica se uma string inicia com determinado texto
str_starts_with($url, 'https');

//verifica se uma string termina com determinado texto
str_ends_with($url, '.br');