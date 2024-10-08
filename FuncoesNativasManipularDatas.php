<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        /*Funções nativas para manipular datas
        date(formato) -> Recuperar a data atual
        date_default_timezone_get(timezone) -> Recuperar o timezone default da aplicação
        date_default_timezone_set(timezone) -> Atualizar o timezone default da aplicação
        strtotime(data) -> Transformar datas textuais em segundos
        */ 

        echo '<b>Funções Nativas para Manipular datas</b><br>';
        echo 'Data e hora de Brasília: ';
        echo date('d/m/Y H:i:s').'<br><hr>';

        $dataInicial = '1997/11/06';
        $dataFinal = '2024/10/08';

        //timestamp
        //01/01/1970 

        $timeInicial = strtotime ($dataInicial);
        $timeFinal = strtotime ($dataFinal);
        echo $dataInicial . ' - ' . $timeInicial . '<br>';
        echo $dataFinal . ' - ' . $timeFinal . '<br>';

        $diferencaTimes = $timeFinal - $timeInicial;
        echo $diferencaTimes . '<br>';

        $segundosEmUmDia = 24 * 60 * 60;
        echo $segundosEmUmDia. ' segundos em um dia<br>';

        $diferencaDiasEntreDatas = $diferencaTimes / $segundosEmUmDia;
        echo round($diferencaDiasEntreDatas).' dias' . '<br>';        
    ?>
</body>
</html>