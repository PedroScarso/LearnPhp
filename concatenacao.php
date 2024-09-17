<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        # echo padrão pra referência de frase
        echo 'Vai Corinthians! Desde 1910 sendo o maior clube do Brasil!<br>';

        # variáveis
        $meuTime = 'Corinthians';
        $anoFundacao = 1910;

        # echo concatenando texto e variáveis, com aspas simples ''
        echo 'Vai'.' '. $meuTime . '!' . ' ' . 'Desde'.' '. $anoFundacao .' '. 'sendo o maior clube do Brasil!<br>';

        # echo com aspas duplas "" o php já entende que é texto com mesclado com variáveis
        echo "Vai $meuTime! Desde $anoFundacao sendo o maior clube do Brasil!";

    ?>
</body>
</html>