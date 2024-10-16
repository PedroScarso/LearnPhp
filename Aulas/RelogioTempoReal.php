<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relógio em Tempo Real</title>
    <script>
        function atualizaRelogio() {
            var agora = new Date();
            var horas = agora.getHours().toString().padStart(2, '0');
            var minutos = agora.getMinutes().toString().padStart(2, '0');
            var segundos = agora.getSeconds().toString().padStart(2, '0');
            document.getElementById('relogio').innerHTML = horas + ':' + minutos + ':' + segundos;
        }

        setInterval(atualizaRelogio, 1000); // Atualiza a cada 1 segundo
    </script>
</head>
<body onload="atualizaRelogio()">
    <h1>Relógio em Tempo Real</h1>
    <div id="relogio">
        <?php
            // Define o horário inicial com PHP
            echo date('H:i:s');
        ?>
    </div>
</body>
</html>
