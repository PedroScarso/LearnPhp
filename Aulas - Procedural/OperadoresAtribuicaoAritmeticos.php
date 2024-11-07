<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Operadores de atribuição aritméticos
        echo '$num1 = ' . $num1 = 21;
        echo '<br>';
        echo '$num2 = ' . $num2 = 8;
        echo '<br>';

        echo 'Ao invés de usar padrão como por exemplo:';
        echo '<br>';
        echo '$num1 + $num2 = $resultado;';
        echo '<br>';
        echo 'echo $resultado;';
        echo '<br>';
        
        echo '$num1 += $num2 =' . ' ' . $num1 += $num2;
        echo '<br>';
        echo $num1 -= $num2;
        echo '<br>';
        echo $num1 *= $num2;
        echo '<br>';
        echo $num1 /= $num2;
        echo '<br>';
        echo $num1 %= $num2;

    ?>
</body>
</html>