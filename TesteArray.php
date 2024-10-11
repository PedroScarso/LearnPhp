<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Teste de array, vou criar uma array multidimensional, cuja o primeiro array vai ser chamar lista de times brasileiros, nela vai incluir 3 Arrays, sendo eles Paulistas, Cariocas e Mineiros, associar um índice a cada item e fazer uma pesquisa...

    
    //Lista de times com var_dump
    echo '<h4>Debug e Pesquisa em Arrays Muldimensionais</h4>';
    echo '<b>$listaTimes com var_dump</b>';
    $listaTimes = [
        'Paulistas' => ['Corinthians' => ['TorcidasOrganizadas' => ['Gaviões da Fiel','Camisa 12','Pavilhão 9','Fiel Macabra'],
    ],
        'São Paulo' => ['Independente','Tricolor'],
        'Santos' => ['Torcida jovem','Alvinegro'],
        'Palmeiras' =>['Mancha verde','Alviverde']
    ],
        'Cariocas' => ['Flamengo','Fluminense','Vasco','Botafogo'],
        'Mineiros' => ['Atlético Mineiro','Cruzeiro']
    ];

    echo '<pre>';
    var_dump($listaTimes);
    echo '</pre>';

    //Lista de times com print_r
    echo '<b>$listaTimes com print_r</b>';
    echo '<pre>';
    print_r($listaTimes);
    echo '</pre>';
    ?>
</body>
</html>