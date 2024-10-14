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

    //Função sort ordena em ordem alfabética rearranjando os índices de cada item
    echo '<b>Função sort</b><br>';

    $pcGamer = ['Gabinete', 'SSD', 'Fonte','Placa mãe','GPU','CPU','Monitor','Ram','CPU Fan','Teclado','Mouse','Headset','Microfone','Cabo HDMI'];

    echo '<pre>';
    print_r($pcGamer);
    echo '</pre>';

    sort($pcGamer);
    echo '<pre>';
    print_r($pcGamer);
    echo '</pre><hr>';

    //Função asort ordena um array colocando os valores em ordem alfabética porém preservando seus índices
    echo '<b>Função asort</b><br>';

    $geladeira = ['Agua','Carne','Refrigerante','Suco','Manteiga','Requeijão','Queijo','Sobremesa','Leite','Ovos'];

    echo '<pre>';
    print_r($geladeira);
    echo '</pre>';

    asort($geladeira);
    echo '<pre>';
    print_r($geladeira);
    echo '</pre><hr>';

    //Função count, conta quantos itens tem dentro do array

    echo '<b>Função count</b><br>';

    $listaCores = ['Branco','Azul','Preto','Vermelho','Amarelo','Roxo','Verde','Marrom'];

    echo '<pre>';
    echo count($listaCores).'<br>';
    print_r($listaCores);
    echo '</pre><hr>';

    //Função merge, faz a união de itens de 2 arrays
    echo '<b>Função array_merge</b><br>';

    $sistemaOperacional = ['Ubuntu','W10','WS12','WS19','Mac'];
    $sistemaOperacionalMobile = ['Android','Windows phone','IOS'];

    echo '<pre>';
    print_r($sistemaOperacional);
    echo '</pre>';

    echo '<pre>';
    print_r($sistemaOperacionalMobile);
    echo '</pre>';

    $arrayOperacionaisMerge = array_merge($sistemaOperacional, $sistemaOperacionalMobile);

    echo '<pre>';
    print_r($arrayOperacionaisMerge);
    echo '</pre><hr>';

    //Função explode dividi a string baseado no delimitador e o retorno

    $data = '06/11/1997';

    echo '<pre>';
    print_r($data);
    echo '</pre>';

    $dataExplode = explode ('/', $data);

    echo '<pre>';
    print_r($dataExplode);
    echo '</pre>';
    ?>
</body>
</html>