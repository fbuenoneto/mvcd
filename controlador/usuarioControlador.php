<?php

require_once "modelo/usuarioModelo.php";

function ListarTodosUsuarios() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $datadenascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipousuario = $_POST["tipousuario"];
        
        $msg = adicionarUsuario($nome, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario);
        
        
        exibir("usuario/listar"); 
        
    } else {
        exibir("usuario/formulario");
    }
}

function deletar($id) {
    deletarUsuario($id);
    redirecionar("usuario/ListarTodosUsuarios");
}

function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $datadenascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipousuario = $_POST["tipousuario"];
        
        $msg = editarUsuario($id,$nome, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario);
        echo $msg;
        
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}
