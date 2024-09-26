<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            Operadores aritméticos
            Adição (+) - Soma de valores
            Subtração (-) - Diferença entre valores
            Multiplicação (*) - Produto entre valores 
            Divisão (/) - Quociente entre valores
            Módulo (%) - Resto existente em uma operação de divisão
        */ 

    echo 'Variável um:' . $num1 = 10;
    echo '<br>';
    echo 'Variável dois:' . $num2 = 11;
    echo '<br>';
    $adicao = $num1 + $num2;
    $subtracao = $num1 - $num2;
    $multiplicacao = $num1 * $num2;  
    $divisao = $num1 / $num2; 
    $modulo = $num1 % $num2;

    echo "Soma entre valores: $num1 + $num2 = $adicao";
    echo '<br>';
    echo "Diferença entre valores: $num1 - $num2 = $subtracao";
    echo '<br>';
    echo "Produto entre valores: $num1 * $num2 = $multiplicacao";
    echo '<br>';
    echo "Quociente entre valores: $num1 / $num2 = $divisao";
    echo '<br>';
    echo "Resto entre valores: $num1 % $num2 = $modulo";

    ?>
</body>
</html>