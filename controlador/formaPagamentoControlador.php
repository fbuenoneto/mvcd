<?php
require_once "modelo/formaPagamentoModelo.php";

/** A */
function adicionar() {
    if (ehPost()) {
        $descricao = $_POST["descricao"];
          
        $msg = adicionarFormaPagamento($descricao);
        redirecionar("formaPagamento/ListarTodasFormas",$msg);
        
    } else {
        exibir("formaPagamento/formulario"); // como você tiver salvo sua pasta e visão, aconselho assim 
    }
}

/** A */
function ListarTodasFormas() {
    $dados["formas"] = pegarTodasFormas();
    exibir("formaPagamento/listar", $dados);
}

/** A */
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

/** A */
function deletar($idForma) {
    deletarForma($idForma);
    redirecionar("formaPagamento/ListarTodasFormas");
}