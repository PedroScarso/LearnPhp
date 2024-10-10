<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Array associativo

    $listaCores = array('a' => 'Azul',
    'b' => 'Amarelo',
    'c' => 'Branco',
    'd' => 'Cinza',
    'e' => 'Dourado',
    'f' => 'Esmeralda');


// Array Associativo com var_dump

echo 'Array associativo com var_dump<br>';

echo '<pre>';
var_dump ($listaCores);
echo '</pre>';
echo '<br><hr>';


// Array Associativo com print_r

echo 'Array associativo com print_r<br>';
echo '<pre>';
print_r ($listaCores);
echo '</pre><hr>';

echo $listaCores ['d'];
echo '<hr>';      
    ?>
</body>
</html>