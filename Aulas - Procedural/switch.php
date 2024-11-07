<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $parametro = 2;

        switch ($parametro) {
            case 1:
                echo "Situação 1!";
                break;
            
            case 'a':
                echo "Situação 2!";
                break;

            case false:
                echo "Situação 3!";
                break;

            default:
                echo "Situação Default!";
        }

    ?>
</body>
</html>