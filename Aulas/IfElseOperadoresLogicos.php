<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fortaleza = 2;
        $Corinthians = 2;
        $resultado = $Corinthians - $fortaleza;

        if($Corinthians > $fortaleza) {
            echo "Vitória do Corinthians!<br>";
        } elseif($Corinthians === $fortaleza) {
            echo "Empate<br>";
        } else {
            echo "Vitória do Fortaleza!<br>";
        }

        if(10 == "10" && 20 >= 21) {
            echo 'Situação 1<br>';
        } elseif($resultado >= 100 || $resultado != 2) {
            echo 'Situação 2<br>';
        } else {
            echo 'Situação 3<br>';
        }

        $resultado = 101;
        if(10 == "10" XOR 20 >= 20) {
            echo 'Situação 1<br>';
        } elseif($resultado >= 100) {
            echo 'Situação 2<br>';
        } else {
            echo 'Situação 3<br>';
        }

        if(10 === "10" || 20 >= 21 || 1 <> 2) {
            echo 'Situação 1<br>';
        } elseif($resultado >= 102) {
            echo 'Situação 2<br>';
        } else {
            echo 'Situação 3<br>';
        }

        if(!(10 === "10" && 20 >= 21 || 1 <> 1)) {
            echo 'Situação 1<br>';
        } elseif($resultado >= 102) {
            echo 'Situação 2<br>';
        } else {
            echo 'Situação 3<br>';
        }
    ?>
</body>
</html>