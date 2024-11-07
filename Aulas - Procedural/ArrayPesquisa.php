<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  Pesquisando um parâmetro dentro do array
        in_array() --> O Retorno é True ou false para a existência do que está sendo procurado
        array_search() --> Retorna o índice do valor ou Null
    */


    //Passagem de valor para o array multidimensional

    $listaTimes = ['$timesPaulistas', '$timesCariocas'];

    $timesCariocas = ['flamengo','fluminense','botafogo','vasco'];

    $timesPaulistas = ['Corinthians','santos','sao paulo','palmeiras']; 
    
    //Debug no array $listaTimes
    echo '<h3>debug no array $listaTimes</h3>';
    echo '<pre>'; 
    var_dump($listaTimes);
    echo '</pre>';

    echo '<pre>'; 
    print_r($listaTimes);
    echo '</pre><hr>';

    //Debug no array $timesPaulistas
    echo '<h3>debug no array $timesPaulistas</h3>'; 
    echo '<pre>'; 
    var_dump($timesPaulistas);
    echo '</pre>';

    echo '<pre>'; 
    print_r($timesPaulistas);
    echo '</pre><hr>';

    //Debug no array $timesCariocas
    echo '<h3>debug no array $timesCariocas</h3>'; 
    echo '<pre>'; 
    var_dump($timesCariocas);
    echo '</pre>';

    echo '<pre>'; 
    print_r($timesCariocas);
    echo '</pre><hr>';

    //pesquisa in_array
    echo '<h3>Pesquisa in_array</h3><br>';
    $existe = in_array('$timesCariocas', $listaTimes);

    if ($existe) {
        echo 'Sim, existe.'; 
    } else {
        echo 'Não, existe.';    
    }

    echo '<hr>';

    // Pesquisa usando array_search()
    // Diferentemente do comando in_array, ele puxa o índice referente ao item que você está buscando.
    // Ao fazer o teste com array na primeira posição com comando ARRAY_SEARCH notei que pelo índice ser 0, o retorno da condição entrou em else, diferentemente dos outros índices.
    echo '<h3>debug no array $timesCariocas</h3>';
    echo $teste = array_search('Corinthians',$timesPaulistas);
    echo '<br>';

    if ($teste != null) {
        echo 'Diferente de null';
    } else {
        echo 'É null';
    }
    // Como Corinthians é posição 0 no array, ele retorna null
    ?>
</body>
</html>