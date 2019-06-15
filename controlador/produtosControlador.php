<?php

require_once "modelo/produtoModelo.php";

function visualizar($idproduto) {
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir("produto/visualizar", $dados);
}

function ListarTodosProdutos() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function adicionar() {
    if (ehPost()) {
        $preco = $_POST["preco"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_POST["imagem"];
        $categoria = $_POST["categoria"];
        $estoqueminimo = $_POST["estoqueminimo"];
        $estoquemaximo = $_POST["estoquemaximo"];
          
        $msg = adicionarProduto($preco, $nome, $descricao, $tamanho, $imagem, $categoria, $estoqueminimo, $estoquemaximo);
        echo $msg;
        
    } else {
        exibir("produto/formulario");
    }
}

function editar($idproduto) {
    if (ehPost()) {
        $preco = $_POST["preco"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_POST["imagem"];
        $categoria = $_POST["categoria"];
        $estoqueminimo = $_POST["estoqueminimo"];
        $estoquemaximo = $_POST["estoquemaximo"];
        
        $msg = editarUsuario($preco, $nome, $descricao, $tamanho, $imagem, $categoria, $estoqueminimo, $estoquemaximo);
        echo $msg;
        
    } else {
        $dados["usuario"] = pegarProdutoPorId($idproduto);
        exibir("produto/formulario", $dados);
    }
}

function deletar($idproduto) {
    deletarProduto($idproduto);
    redirecionar("produtos/ListarTodosProdutos");
}