<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $idade = 18;

    if ($idade >= 18) {
        echo "Você é maior de idade.";
    } else if($idade>= 13) {
        echo "Você é adolescente.";
    } else {
        echo "Você é criança.";
    }


    /*  IF / Else

        if (condição) {
            trecho de código que será executado
        } else {
            trecho de código que será executado
         }

         if (condução1) {
            trecho de código que será executado
         } else if (condição2) {
            trecho de código que será executado
          } else {
            trecho de código que será executado
           }
    */

    /*
        Os blocos de controle if, else if e else em programação são usados para tomar decisões com base em condições. Eles verificam se uma expressão lógica é verdadeira ou falsa e, com base nisso, executam diferentes partes do código.

        1. If
        - Teoria: O bloco if é usado para verificar uma condição. Se essa condição for verdadeira (true), o código dentro do bloco if será executado. Se a condição for falsa (false), o código dentro do bloco if será ignorado.

        if (condição) {
           // Código a ser executado se a condição for verdadeira
        }

        - Prática: Por exemplo, você pode usar o if para verificar se um usuário tem mais de 18 anos:

        $idade = 20;

        if ($idade >= 18) {
            echo "Você é maior de idade.";
        }

        2. Else
        - Teoria: O bloco else é usado em conjunto com o if. Ele será executado somente quando a condição do if for falsa. Em outras palavras, o else especifica o que deve ser feito se a condição if não for satisfeita.

        if (condição) {
            // Código a ser executado se a condição for verdadeira
        } else {
            // Código a ser executado se a condição for falsa
        }

        - Prática: Vamos expandir o exemplo anterior para incluir um bloco else que lida com o caso em que o usuário é menor de idade:

        $idade = 16;

        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }

        3. else if

        - Teoria: O else if é usado quando você tem mais de uma condição a ser verificada. Ele permite encadear múltiplas verificações. Se a primeira condição if for falsa, o programa verifica a condição else if. Se o else if também for falso, ele pode cair para um outro else ou continuar verificando outras condicões com mais else if.

        if (condição1) {
            // Código a ser executado se condição1 for verdadeira
        } else if (condição2) {
            // Código a ser executado se condição2 for verdadeira
        } else {
            // Código a ser executado se todas as condições forem falsas
        }

        - Prática: Imagine que você queira exibir mensagens diferentes para maiores de idade, adolescentes e crianças:


        $idade = 14;

        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else if ($idade >= 13) {
            echo "Você é adolescente.";
        } else {
            echo "Você é criança.";
        }

    */



    ?>
</body>
</html>