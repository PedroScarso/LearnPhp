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
        in_array() --> True ou false para a existência do que está sendo procurado
        array_search() --> Retorna o índice do valor  
    */
    
    $listaTimes = ['Corinthians','santos','sao paulo','palmeiras']; 
    echo '<pre>'; 
    var_dump($listaTimes);
    echo '</pre>';

    echo '<pre>'; 
    print_r($listaTimes);
    echo '</pre><hr>';

    $existe = in_array('Corinthians', $listaTimes);

    if ($existe) {
        echo 'Sim, existe.'; 
    } else {
        echo 'Não, existe.';    
    }

    // Pesquisa usando array_search()
    // Diferentemente do comando in_array, ele puxa o índice referente ao item que você está buscando.
    echo array_search('Corinthians',$listaTimes);
    
    ?>
</body>
</html>