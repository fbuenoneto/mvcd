<?php

require_once "modelo/usuarioModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($email, $senha);
        
        if (acessoLogar($usuario)) {
            alert("bem vindo" . $login);
            redirecionar("usuario");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

function adicionar(){
    if (ehPost()){
        $nome = $_POST["usuario"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $dataDeNascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipousuario = $_POST["tipousuario"];
        
        redirecionar("usuario/index");
    }else{
        exibir("login/index");
    }
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("usuario");
}

?>