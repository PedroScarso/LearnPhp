<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Array multidimensional Simples, cada chave é associada a um array de valores. Não há mais níveis de subarrays além disso.

    $listaCoisas = ['frutas', 'cores'];

    $listaCoisas['cores'] = ['azul','branco', 'cinza', 'dourado']; //ou array()

    $listaCoisas['frutas'] = ['banana','maça', 'morango', 'Uva']; //ou array();

    

    // Array multidimensional com var_dump
    // Esse array nada mais é que um array dentro de outro array Ou uma lista dentro de outra lista, existe a lista de coisas =(lista de listas), sendo assim lista de coisas conteria dentro de si uma lista de frutas, uma lista de roupas, uma lista de compras, uma lista de qualquer coisa. Assim como uma banana pode ser uma lista, já que possui características, então uma banana é uma lista de características, sendo, cor = amarelo, peso = 100 gramas e por aí vai.

    echo 'Array multidimensional com var_dump<br>';
    echo '<pre>';
    var_dump($listaCoisas);
    echo '</pre><hr>';
    
    
    // Array multidimensional com print_r

    
    echo 'Array multidimensional (Lista Coisas) com print_r<br>';
    echo '<pre>';
    print_r($listaCoisas);
    echo '</pre><hr>';
    ?>
</body>
</html>