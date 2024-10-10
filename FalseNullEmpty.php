<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Array -->  False, Null e Empty
    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    echo '<h2>Valores False, Null e Empty para variáveis.</h2><hr>';
    echo '<h3>Primeiro teste = is_null</h3>';

    // Verificando se $funcionario1 é null

    echo '<h4>Valor passado = null</h4>';
    if(is_null($funcionario1)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }

    // Verificando se $funcionario2 é null

    echo '<h4>Valor passado = vazio</h4>';
    if(is_null($funcionario2)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }

    // Verificando se $funcionario3 é null

    echo '<h4>Valor passado = false</h4>';
    if(is_null($funcionario3)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }


    echo '<hr>';


    //Teste !isset?

    echo '<h3>Segundo teste = empty </h3>';

    // Verificando se $funcionario1 é null

    echo '<h4>Valor passado = null</h4>';
    if(empty($funcionario1)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }

    // Verificando se $funcionario2 é null

    echo '<h4>Valor passado = empty</h4>';
    if(empty($funcionario2)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }

    // Verificando se $funcionario2 é null

    echo '<h4>Valor passado = false</h4>';
    if(empty($funcionario3)) {
        echo 'Sim, a variável é null<br>';
    } else {
        echo 'Não, a variável não é null<br>';
    }

    echo '<hr><p>Ou seja, ao verificar se False, empty e null, são considerados null, somente null é verdadeiro. E ao verificar se False, empty e null são empty ou vazios, todos são verdadeiros ou vazios. </p>';



    ?>
</body>
</html>