<?php

    # Include - Incluindo arquivos
    include 'Auxiliar.php';
    include 'Auxiliar.ph';
    echo'<br>';
    // Quando você usa Include para adicionar um arquivo cuja o caminho não existe, o retorno é *WARNING - Failed to open stream. No such file or diretory in 'C:\caminho\pasta\arquivo.php'*
    
    # Require - Igualmente o include ele inclui um arquivo, porém ele inclui fazendo a requisição de que o restante só funciona se o arquivo requerido de fato existe, como uma condição, retorna também *Warning* para avisar o erro, mas retorna *Fatal Error - Failed opening required*
    require 'Auxiliar.php';

    Echo '<br>Vai Corinthians';
    require 'Auxiliar.ph';
    echo'<br>';
    # Perceba que esse echo não funciona pois o segundo require não funciona.
    Echo 'Vai Corinthians!';

?>