<?php
    require_once "validadorDeAcesso.php";
    //tratamento do texto
    $titulo = str_replace('#' , '-' , $_POST['titulo']);
    $categoria = str_replace('#' , '-' , $_POST['categoria']);
    $descricao = str_replace('#' , '-' , $_POST['descricao']);

    //implode faz tudo isso /\ numa só função

    //2ª parte tratamento texto
    if(isset($_SESSION['ID'])) {
    $texto = $_SESSION['ID'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;    
}

    //abrindo o arquivo
    $chamado = fopen('arquivo.txt','a');

    //escrevendo o texto
    fwrite($chamado, $texto);

    //fechando o arquivo
    fclose($chamado);
    
    header('Location: abrirChamado.php');    
?>