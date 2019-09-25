<?php
require_once "modelo/formaPagamentoModelo.php";
function adicionar() {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
          
        $msg = adicionarFormaPagamento($descricao);
        redirecionar("formaPagamento/ListarTodasFormas",$msg);
        
    } else {
        exibir("formaPagamento/formulario"); // como você tiver salvo sua pasta e visão, aconselho assim 
    }
}
function ListarTodasFormas() {
    $dados["formas"] = pegarTodasFormas();
    exibir("formaPagamento/listar", $dados);
}
function editar($idForma) {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
        
        $msg = editarForma($idForma,$descricao);
        redirecionar("formaPagamento/ListarTodasFormas");
    } else {
        $dados["formas"] = pegarFormaPorId($idForma);
        exibir("formaPagamento/formulario", $dados);
    }
}

function deletar($idForma) {
    deletarForma($idForma);
    redirecionar("formaPagamento/ListarTodasFormas");
}