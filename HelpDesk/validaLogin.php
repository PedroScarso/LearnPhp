<?php
    session_start();
    // Inicializa a variável de autenticação
    $usuarioAutenticado = false;
    $usuarioId = null;
    $usuarioPerfil = null;

    $perfis = [
        1 => 'Administrativo', 2 => 'Usuário'
    ];

    /*$usuarios_app2 = array (
        array('id' => 1, 'email' => 'adm@dominio.com.br', 'password' => 'abc@1234', 'Nome' => 'Ronaldinho Gaúcho', 'Status' => 'Administrador', 'Created' => 'Criado em', 'Modified' => 'Modificado em')
    );

    echo '<pre>';
    print_r($usuarios_app2);
    echo '</pre>';*/
    
    $usuarios_app = [
    [   "ID" => 1,
        "email" => "danilo.bagagine@alcon.com.br",
        "password" => "1234",
        "Nome" => "Danilo Bagagine",
        "Status" => "Administrador",
        "perfilId" => "1",
        "Created" => "Criado em",
        "Modified" => "Modificado em",
        ],[
    
        "ID" => 2,
        "email" => "laura.machado@alcon.com.br",
        "password" => "1234",
        "Nome" => "Laura Machado",
        "Status" => "Comum",
        "perfilId" => "2",
        "Created" => "Criado em",
        "Modified" => "Modificado em",
        ],[

        "ID" => 3,
        "email" => "leticia.santos@alcon.com.br",
        "password" => "1234",
        "Nome" => "Letícia Santos",
        "Status" => "Comum",
        "perfilId" => "2",
        "Created" => "Criado em",
        "Modified" => "Modificado em",
        ]
    ];  

    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
    

    // Para verificar o que está sendo recebido em POST
    echo 'Post:';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    


    //  Condição verifica se existe o POST
    //  Se sim, verifica se o POST tem os índices email e senha, e se são iguais aos que estão no array $usuarios_app, se sim Usuário autenticado, Se usuário é autenticado redireciona para home, se não para index.php
    foreach($usuarios_app as $user) {

    if (isset($_POST['email']) && isset($_POST['password'])) {
        if ($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
        $usuarioAutenticado = true;
        $usuarioId = $user['ID'];
        $usuarioPerfil = $user['perfilId'];
            }
        }
    }
    // Verifica o status de autenticação
    if ($usuarioAutenticado) {
        $_SESSION['Autenticado'] = 'Sim';
        $_SESSION['ID'] = $usuarioId;
        $_SESSION['perfilId'] = $usuarioPerfil;
        //header('Location: home.php');
    } else {
        $_SESSION['Autenticado'] = 'Não';
       // header('Location: index.php?login=erro');
    }

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
?>

