<?php

require_once "modelo/usuarioModelo.php";

function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["usuario"];
        $email = $_POST["email"];

            if (strlen(trim($_POST['email'])) == 0) {
            $errors[] = "Você deve inserir um e-mail.";
            }
            
        $senha = $_POST["senha"];
        alert(adicionarUsuario($nome, $email, $errors,$senha));
        redirecionar("usuario/index");
    } else {
        exibir("usuario/login");
    }
}

function deletar($id) {
    alert(deletarUsuario($id));
    redirecionar("usuario/index");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        alert(editarUsuario($id, $nome, $email));
        redirecionar("usuario/index");
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
