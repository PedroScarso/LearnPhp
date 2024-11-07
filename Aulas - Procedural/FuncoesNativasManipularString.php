<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        /*Funções nativas para manipular strings
            strtolower($texto) -> Transforma todos os caracteres da string em minúsculos
            strtoupper($text) -> Transforma todos os caracteres da string em maiúsculos
            ucfirst($texto) -> Transforma o primeiro caracter da string em maiúsculos
            srtlen($texto) -> Conta a quantidade de caracteres de uma string
            str_replace(<procura por>, <subtitui por>, $texto) -> Substitui uma cadeia de caracteres por outra dentro de uma string
            substr($texto, <posicao inicial>) -> Retorna parte de uma string
        */ 
        echo 'Funções Nativas para Manipular Strings!<br><hr>';

        // srttolower -> transforma todos caracteres da string em minúsculos
        echo '<b>strtolower</b><br>';
        $texto = 'Pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo strtolower($texto). '<br><hr>';

        // srttoupper -> transforma todos caracteres da string em maiúsculos
        echo '<b>strupper</b><br>';
        $texto = 'Pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo strtoupper($texto). '<br><hr>';
        
        // ucfirst -> Transforma o primeiro caracter da string em maiúsculos
        echo '<b>ucfirst</b><br>';
        $texto = 'pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo ucfirst($texto). '<br><hr>';
        
        // strlen -> Conta a quantidade de caracteres de uma string
        echo '<b>strlen</b><br>';
        $texto = 'Pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo strlen($texto). '<br><hr>';

        // str_replace (<procura por>, <subtitui por>, $texto) -> Substitui uma cadeia de caracteres por outra dentro de uma string
        echo '<b>str_replace</b><br>';
        $texto = 'Pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo str_replace('fim', 'final', $texto). '<br><hr>';

        // substr($texto, <posicao inicial>) -> Retorna parte de uma string
        echo '<b>substr</b><br>';
        $texto = 'Pelo Corinthians com muito amor, até o fim!';
        echo $texto . '<br>';
        echo substr($texto, 0, 31). '...' . '<br><hr>';
        
    ?>
</body>
</html>