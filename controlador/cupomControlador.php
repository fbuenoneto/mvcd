<?php

require_once "modelo/cupomModelo.php";

function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $desconto = $_POST["desconto"];
          
        $msg = adicionarCupom($nome,$desconto);
        echo $msg;
        
    } else {
        exibir("cupom/cupom");
    }
}

function ListarTodosCupons() {
    $dados["cupom"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);
}

function editar($idcupom) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $desconto = $_POST["desconto"];
        
        $msg = editarCupom($idcupom,$nome, $desconto);
        echo $msg;
        
    } else {
        $dados["cupom"] = pegarCupomPorId($idcupom);
        exibir("cupom/cupom", $dados);
    }
}