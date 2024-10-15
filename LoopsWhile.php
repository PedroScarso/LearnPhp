<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //While --> É utilizado para executar repetidamente um bloco de código enquanto uma condição for verdadeira. O loop verifica a condição antes de cada iteração, e se for verdadeira, ele executa o código dentro do bloco. O loop continua até que a condição se torne false.     while (condição) {código a ser executado enquanto a condição for verdadeira}

        // Acréscimo de 1 em 1 até 20
        $num = 1;
        echo '<b>Loop com while</b><br>';
        echo '-- Início do loop --<br>';
        while($num <= 20) {
            echo "$num . <br>";
            $num++;
        }   
            echo '-- Fim do loop --';

            echo '<hr>';
        
        
         
    ?>
</body>
</html> 