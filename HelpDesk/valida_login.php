<?php
 $usuarios_app = [
    "ID" => 1,
    "email" => "adm@alcon.com.br",
    "senha" => "1234",
    "Nome" => "Usuário Administrador"
];

echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
print_r($usuarios_app['email']);
print_r($usuarios_app['senha']);

// Inicializa a variável de autenticação
$usuario_autenticado = false;

//  Condição verifica se existe o POST
//  Se sim, verifica se o POST tem os índices email e senha, e se são iguais aos que estão no array $usuarios_app, se sim Usuário autenticado, Se usuário é autenticado redireciona para home, se não para index.php
if (isset($_POST['email']) && isset($_POST['senha'])) {
    if ($usuarios_app['email'] == $_POST['email'] && $usuarios_app['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

// Verifica o status de autenticação
if ($usuario_autenticado) {
    header('Location: home.php');
} else {
    header('Location: index.php?login=erro');
}

?>