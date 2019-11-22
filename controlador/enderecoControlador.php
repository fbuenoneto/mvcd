<?php
require_once "modelo/enderecoModelo.php";
require_once "modelo/usuarioModelo.php";

/** anon */
function adicionar($id) {
    if (ehPost()) {
        $idusuario = $id;
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
          
        $msg = adicionarEndereco($idusuario,$logradouro,$numero,$complemento,$bairro,$cidade,$cep);
        redirecionar("endereco/ListarTodosEnderecos",$msg);
        
    } else {
        exibir("endereco/formulario"); // como você tiver salvo sua pasta e visão, aconselho assim 
    }
}
/** A */
function ListarTodosEnderecos() {
    $dados["endereco"] = pegarTodosEnderecos();
    exibir("endereco/listar", $dados);
}

function ListarTodosEnderecosPorId($idusuario) {
    $dados["idusuario"] = pegarEnderecoPorId($idusuario);
    print_r($dados);
    exibir("endereco/listar", $dados);
}

/** p */
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

/** p */
function deletar($idendereco) {
    deletarForma($idendereco);
    redirecionar("endereco/ListarTodosEnderecos");
}

