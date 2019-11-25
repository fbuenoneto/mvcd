<?php

require_once "modelo/cupomModelo.php";

/** A */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $desconto = $_POST["desconto"];
          
        $msg = adicionarCupom($nome,$desconto);
        
        redirecionar("cupom/ListarTodosCupons");
        
    } else {
        exibir("cupom/cupom");
    }
}
/** A */
function ListarTodosCupons() {
    $dados["cupom"] = pegarTodosCupons();
    exibir("cupom/listar", $dados);
}

function deletar($idcupom){
    deletarCupom($idcupom);
    redirecionar("cupom/ListarTodosCupons");
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