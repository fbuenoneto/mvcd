<?php

require_once "modelo/cupomModelo.php";

/** A */
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
/** A */
function ListarTodosCupons() {
    $dados["cupom"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);
}

/** A */
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