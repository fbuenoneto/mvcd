<?php

require_once 'modelo/categoriaModelo.php';

/** A */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
          
        $msg = adicionarCategoria($nome,$descricao);
        
        redirecionar("categorias/ListarTodaCategoria",$msg);
        
    } else {
        exibir("categoria/categoria");
    }
}

/** A */
function ListarTodaCategoria() {
    $dados["categoria"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}
/** A */
function deletar($idcategoria) {
    deletarCategoria($idcategoria);
    redirecionar("categorias/ListarTodaCategoria");
}