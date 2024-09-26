<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*  Operadores de incremento e decremento

        Operadores: 
        Pré-incremento (++$a) - Adiciona uma unidade antes de retornar $a
        Pós-incremento ($a++) - Retorna $a e depois adiciona uma unidade
        Pré-decremento (--$a) - Diminui uma unidade antes de retornar $a
        Pós-decremento ($a--) - Retorna $a e depois diminui uma unidade
    */

        $num1 = 7;

        echo 'Pós-incremento<br>';
        echo "O valor contido em a é $num1 <br>";
        echo 'O valor contido em a após o incremento é ' . $num1++ . '<br>';
        echo "O valor atualizado é $num1 <br><br>";

        echo 'Pré-incremento<br>';
        echo "O valor contido em a é $num1 <br>";
        echo 'O valor contido em a após o incremento é ' . ++$num1 . '<br>';
        echo "O valor atualizado é $num1 <br><br>";

        echo 'Pós-decremento<br>';
        echo "O valor contido em a é $num1 <br>";
        echo 'O valor contido em a após o incremento é ' . $num1-- . '<br>';
        echo "O valor atualizado é $num1 <br><br>";

        echo 'Pré-decremento<br>';
        echo "O valor contido em a é $num1 <br>";
        echo 'O valor contido em a após o incremento é ' . --$num1 . '<br>';
        echo "O valor atualizado é $num1 <br><br>";

    ?>
</body>
</html>