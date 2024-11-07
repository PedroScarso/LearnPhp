<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $valor = 21;
        $valor2 = (float) $valor;

        echo "$valor<br>";
        echo "$valor2<br>";

        echo gettype($valor) . '<br>';
        echo gettype($valor2) . '<br>';
        var_dump($valor);
        echo '<br>' ;
        var_dump($valor2);

    ?>
</body>
</html>