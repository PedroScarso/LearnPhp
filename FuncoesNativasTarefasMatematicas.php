<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        /*Funções nativas para tarefas matemáticas
        ceil($numero) -> Arredonda o valor para cima
        floor($numero) -> Arredonda o valor para baixo
        round($numero) -> Arredonda o valor com base nas casas decimais
        rand() -> Gera um inteiro aleatório
        sqrt($numero) -> Retorna a raiz quadrada
        */
        
        // Variável para demonstração
        $num = 1997.21;
        $num2 = 2024.71;
        $numRaiz = 25;

        echo '<b>Funções nativas para tarefas matemáticas!</b><br>';

        echo "Números de referência <b>a = $num</b> e <b>b = $num2</b>.<br><hr>";

        // ciel -> Arredonda o valor para cima
        echo '<b>ceil</b> - Arredonda o valor para cima<br>';
        echo "Número referência: $num<br>";
        echo 'Número tratado: '.ceil($num). '<hr>';

        // floor -> Arredonda o valor para baixo
        echo '<b>floor</b> - Arredonda o valor para baixo<br>';
        echo "Número referência: $num<br>";
        echo 'Número tratado: '.floor($num). '<hr>';      

        //round -> Arredonda o valor com base nas casas decimais, a baixo 0.4-, a cima 0.5+
        echo '<b>round</b> - Arredonda o valor com base nas casas decimais<br>';
        echo "Número referência: $num<br>";
        echo 'Número tratado: '.round($num).'<br>';
        echo 'Número tratado: '.round($num2).'<hr>';

        //rand -> Gera um inteiro aleatório dentro de um range pré estabelicido
        echo '<b>rand</b> - Gera um inteiro aleatório dentro de um range pré estabelicido<br>';
        echo 'Número aleatório: '.rand(21, 99).'<br>';
        echo 'Range mínimo pré-estabelicido: 21<br>';
        echo 'Range máximo pré-estabelicido: 99<br>';
        echo 'Range máximo da função: ' .getrandmax(). '<hr>';

        //sqrt -> Retorna a raiz quadrada
        echo '<b>sqrt</b><br>';
        echo "Número referência: $numRaiz<br>";
        echo 'Raiz quadrada: '.sqrt($numRaiz). '<hr>';
    ?>
</body>
</html>  