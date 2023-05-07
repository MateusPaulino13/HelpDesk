<?php
// metodo GET coloca as informações requisitadas na URL
// Já o metodo POST coloca tudo junto na requisição sem expor o usuário

// $email = $_POST['email'];
// $senha = $_POST['senha'];
$usuario_autenticado = false;

$usuarios = [
    ["email" => "adm@gmail.com", "senha" => "12345"],
    ["email" => "user@gmail.com", "senha" => "abcd"],
    ["email" => "mateusgpaulino@gmail.com", "senha" => "Paulino13"]
];

foreach ($usuarios as $user) {

    // Verificando se o Usuário digitado é igual ao Usuário do "Banco de Dados"
    if ($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha']) {
        $usuario_autenticado = true;
    }

    // Autenticando Usuário
    if ($usuario_autenticado) {
        echo "Usuário Autenticado";
    } else {
        header("Location: index.php?login=erro");
    }
}
