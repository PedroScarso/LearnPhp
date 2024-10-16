<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        /* Array básico
        É uma lista separando unidades por vírgula e dando uma posição a cada uma delas.
        Posição essa que começa em 0. Exempo: Array [Azul, Branco, Cinza, Dourado]
                                      Posição:      [0   , 1     , 2    , 3]
                                      [0 = Azul, 1 = Branco, 2 = Cinza, 3 = Dourado]
        */  
        echo '<b>Array</b><br><br>';

        echo 'Array básico com var_dump<br>';

        $listaFrutas = array('Abacate', 'Ameixa', 'Abacaxi', 'Banana', 'Mamão', 'Melância', 'Morango');


        // Array básico com var_dump

        echo '<pre>';
        var_dump ($listaFrutas);
        echo '</pre>';
        echo '<br><hr>';


        // Array básico com var_dump

        echo 'Array básico com print_r<br>';

        echo '<pre>';
        print_r ($listaFrutas);
        echo '</pre><hr>'; 
    ?>
</body>
</html>