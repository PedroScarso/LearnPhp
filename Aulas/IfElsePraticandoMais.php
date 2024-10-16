<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculo de frete</h2>
    <?php
        /* Calcular frete
        $pagoTotal = 789.69;
        $fretePadrao = 10.00;
        $kmDistancia = 30;
        $freteCalculado = $fretePadrao * $kmDistancia;
        $clienteCadastrado = true;

        if ($pagoTotal >= 800.00 || $clienteCadastrado = true) {
            echo 'Frete grátis!<br>';
        } else {
            echo "Valor do frete: $freteCalculado reais. ";
        } 
        */

        #       Calcular desconto

        // valor total da compra
        $valorCompra = 2200.00;
        $fretePadrao = 2.00;
        $kmDistancia = 50;
        $freteCalculado = $fretePadrao * $kmDistancia;
        $valorTotal = ($valorCompra + $freteCalculado);

        $clienteCadastrado = false;

        // Operador ternário, teste se o cliente é cadastrado
        $teste = $clienteCadastrado ? 'Sim<br>' : 'Não<br>';

        echo $teste;
      
         
        if ($valorCompra >= 1000.00 || $clienteCadastrado == true) {
            echo  "Parabéns seu desconto é de 15%!<br>" . "Valor: " . $valorTotal * 0.85;
        } elseif($valorCompra >= 750.00 || $clienteCadastrado == true) {
            echo  "Parabéns seu desconto é de 10%!<br>" . "Valor: " . $valorTotal * 0.90;
        } elseif($valorCompra >= 500.00 || $clienteCadastrado == true) {
            echo  "Parabéns seu desconto é de 5%!<br>" . "Valor: " . $valorTotal * 0.95;
        } else {
            echo "Desculpa, você não possui desconto, faça o cartão da loja para ganhar 15% de desconto em qualquer compra!";
        }
    ?>
</body>
</html>