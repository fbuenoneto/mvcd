<?php

require_once 'modelo/categoriaModelo.php';

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


function ListarTodaCategoria() {
    $dados["categoria"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

function deletar($idcategoria) {
    deletarCategoria($idcategoria);
    redirecionar("categorias/ListarTodaCategoria");
}