<?php

    # Include - Incluindo arquivos
    include 'Auxiliar.php';
    include 'Auxiliar.ph';
    echo'<br>';
    // Quando você usa Include para adicionar um arquivo cuja o caminho não existe, o retorno é *WARNING - Failed to open stream. No such file or diretory in 'C:\caminho\pasta\arquivo.php'*
    
    # Require - Igualmente o include ele inclui um arquivo, porém ele inclui fazendo a requisição de que o restante só funciona se o arquivo requerido de fato existe, como uma condição, retorna também *Warning* para avisar o erro, mas retorna *Fatal Error - Failed opening required*
    require 'Auxiliar.php';
    Echo '<br>Vai Corinthians! <br>';

    require 'Auxiliar.ph';
    echo'<br>';
    # Perceba que esse echo não funciona pois o segundo require não funciona.
    Echo 'Vai Corinthians!';

    /*
        Existe também as funções include_once e 
                                 require_once
        tem a mesma funcionalidade porém ao adicionar _onde você diz ao seu servidor que você quer incluir/requerir esse arquivo somente uma vez no código.
    */

    // Explicação Sólida
    /* 
        1. include 
        
        - Teoria: A instrução include é usada para inserir e executar o conteúdo de outro arquivo PHP no código. Se o arquivo não for encontrado, o PHP emite um WARNING (aviso), mas continua a execução do script.

        - Prática: É útil quando o arquivo não é essencial para o funcionamento do sistema. Por exemplo, se você quiser incluir um arquivo de template, mas continuar o processo mesmo que o arquivo falhe ao ser incluído.

        include 'header.php';

        2. include_onde

        - Teoria: Funciona de maneira semelhante ao include, mas com uma diferença importante: o arquivo só será incluído uma vez. Mesmo que a instrução include_once seja chamada várias vezes, o arquivo será processado apenas na primeira vez.

        - Prática: Evita a inclusão repetida do mesmo arquivo, o que pode ser útil para evitar redefinições de funções ou classes. É ideal para arquivos que definem funções ou classes para garantir que sejam carregados apenas uma vez.

        include_onde 'functions.php';

        3. require

        - Teoria: A instrução require também é usada para incluir arquivos, mas com uma diferença crucial: se o arquivo não for encontrado, o PHP emite um *Fatal Error* e para a execução do script. O require indica que o arquivo é essencial para o funcionamento do código.

        - Prática: Use require quando o arquivo é fundamental para o script. Por exemplo, arquivos de configurações ou funções essenciais. Se o arquivo estiver faltando, é melhor que o script falhe imediatamente, já que não faz sentido continuar.

        require 'config.php';

        4. require_once

        - Teoria: Assim como require, mas com o comportamento de só incluir o arquivo uma vez, mesmo que chamado múltiplas vezes no script.

        - Prática: Use require_once para arquivos fundamentais que também podem ser usados em múltiplos lugares, como definições de classes ou funções. Isso previne problemas de redefinição.

        require_once 'init.php';
        */
?>