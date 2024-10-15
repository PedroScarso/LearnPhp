<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // A diferença entre While e Do While: No while a primeira coisa que é feita é a verificação da condição, para depois executar a instrução, já no caso do Do While, ele executa a instrução pelo menos uma vez antes de verificar a condição, ou seja, o código vai ser executado pelo menos uma vez, na sequência ele verifica a condição para saber se continua executando a código ou se para.

        $x = 1;

        do {

            $x = $x + 1;

            echo 'Entrou no Do while pelo menos essa vez<br>';           

        } while ($x < 5); {
            echo 'Parou na condição do While';
        }

    ?>
</body>
</html>