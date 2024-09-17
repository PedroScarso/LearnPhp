<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Define é a palavra reservada para usar a variável constante, assim como CONST também, a constante não muda, se você chamar um define e tentar mudar a variável BD_URL para outro caminho que não o primeiro setado, não vai funcionar. Usando a define, você pode resgatar esse caminho toda vez que for necessário dentro do seu código.
        define('BD_URL', 'endereco_bd_dev<br>');
        define('BD_USUARIO', 'usuario_dev<br>');
        define('BD_SENHA', 'senha_dev<br>');

        echo BD_URL;
        echo BD_USUARIO;
        echo BD_SENHA;

    ?>
</body>
</html>