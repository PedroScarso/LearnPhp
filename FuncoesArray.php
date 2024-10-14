<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  Funções nativas para manipular Arrays
        is_array(array) --> Verifica se o parâmetro é um array
        array_keys(array) --> Retorna todas as chaves de um array
        sort(array) --> Ordena um array e reajusta seus índices
        asort(array) --> Ordena um array preservando os índices
        count(array) --> Conta a quantidade de elementos de um array
        array_merge(array) --> Funde um ou mais arrays
        explode(array) --> Divide uma string baseada em um delimitador
        implode(array) --> Junta elementos de um array em uma string
    */

    //$variavel recebe uma string, a função is_array faz o teste para ver se $variavel é um array, como é uma string e não um array, seu retorno é false.
    $variavel = 'Valor';
    $retorno = is_array($variavel);

    echo '<b>Função is_array</b><br>';
    if($retorno) {
        echo 'Sim, é um array';
    } else {
        echo 'Não, não é um array<hr>';
    }
    
    //Criar um novo array, cuja os valores são as chaves do array que foi usado na função
    echo '<b>Função array_keys</b><br>';
    $array = [10 => 'a',
              20 => 'b',
              30 => 'c',
              40 => 'd'
];
    echo '<pre>';
        print_r($array);
    echo '</pre>';

    $arrayKeys = array_keys($array);
    echo '<pre>';
        print_r($arrayKeys);
    echo '</pre>';
    echo '<hr>';

    

    ?>
</body>
</html>