<?php
require_once "modelo/enderecoModelo.php";

function adicionar() {
    if (ehPost()) {
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
          
        $msg = adicionarEndereco($logradouro,$numero,$complemento,$bairro,$cidade,$cep);
        redirecionar("endereco/ListarTodosEndereco",$msg);
        
    } else {
        exibir("endereco/formulario"); // como você tiver salvo sua pasta e visão, aconselho assim 
    }
}

function ListarTodosEnderecos() {
    $dados["endereco"] = pegarTodosEnderecos();
    exibir("endereco/listar", $dados);
}

function editar($idendereco) {
    if (ehPost()) {
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        $msg = editarEndereco();
        redirecionar("endereco/ListarTodosEnderecos");
    } else {
        $dados["enderecos"] = pegarEnderecoPorId($idendereco);
        exibir("endereco/formulario", $dados);
    }
}

function deletar($idendereco) {
    deletarForma($idendereco);
    redirecionar("endereco/ListarTodosEnderecos");
}

