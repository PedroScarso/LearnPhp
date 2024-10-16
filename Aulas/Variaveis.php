
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php

/*
    Variáveis

    O que são variáveis em PHP
    - string, int, float, booelan, array...

    Regras para declaração de variáveis em PHP
    - Deve obrigatoriamente iniciar com o caracter '$'
    - Não pode conter espaços ou caracteres especiais (com exceção do underline)

    Não requer (ou suporte) a definição explícita de tipo

    Case sensitive
    $nome
    $Nome
    $NOME

    cada uma delas é uma variável.

    $nome, $fone1, $endereco_2
    variáveis válidas

    $ idade, $1fone, $número, $endereço
    variáveis inválidas
*/

//string
$nome = 'Pedro Scarso';

//int
$idade = 26;

//float
$peso = 68.5;

//boolean
$fumante_sn = true; //true ou false


?>
    <h1>Ficha Cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn?></p>
    </body>
    </html>
    
    