<?php


//<<< delimitador - retira a identaçao dentro do trecho delimitado
//heredoc - equivalente a aspas duplas - permite interporlaçao de variaveis
//nowdoc - equivalente a aspas simples - nao permite interpolaçao de variaveis

function geraEmail(string $nome):void
{
    $email = <<<FINAL
    Olá, $nome!

    Estou entrando em contato para {motivo do contato}.

    {assinatura}

    FINAL;

    echo $email;
}

geraEmail('Scarlet Martins');