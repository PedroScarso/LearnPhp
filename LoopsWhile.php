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
        
        // Acréscimo de 3 em 3 até 21
        $num1 = 1;
        echo '<b>Loop com while</b><br>';
        echo '-- Início do loop --<br>';
        while($num1 <= 21) {
            echo "$num1 . <br>";
            $num1 += 3;
        }   
            echo '-- Fim do loop --';

            echo '<hr>';

        // Com break, ele faz a execução uma única vez, logo após ele para a instrução e parte para próxima.
        $num2 = 1;
        echo '<b>Loop com while e break</b><br>';
        echo '-- Início do loop --<br>';
        while($num2 <= 20) {
            echo "$num2 . <br>";
            $num2++;

            break;
        }   
            echo '-- Fim do loop --';

            echo '<hr>';
       

        // Acréscimo de 1 em 1 até 20, descartando 2, 6 e 15, usando continue para finalizar até o 20.
        echo '<b>Loop com while e continue</b><br>';
        echo '-- Início do loop --<br>';
        $num3 = 1;
        while($num3 < 20) {
            
            $num3++;
           // Cada parâmetro passado no if segnifica uma parada da instrução, para fazer com que ele seja só uma exceção é realizado uso do CONTINUE, assim ele pra a instrução, porém continua e o critério de parada é o $num3 < 20, o CONTINUE não tem efeito sobre ele.
           if($num3 == 2 || $num3 == 6 || $num3 == 15) {
            continue;
         }   
        
        echo "$num3 . <br>";
    
         
        }
         echo '-- Fim do loop --';
         echo '<hr>';
         
    ?>
</body>
</html> 