<?php

require_once "modelo/produtoModelo.php";
require_once 'modelo/categoriaModelo.php';
require_once "servico/uploadServico.php";

function buscar(){
    if(ehPost()){    
        $nome = $_POST['buscar'];
        $dados['produto'] = pegarProdutoPorNome($nome);
        exibir('produto/busca', $dados);
    }
}

/** anon */
function visualizar($idproduto) {
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir("produto/visualizar", $dados);
}

function visualizarAdmin($idproduto) {
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir("produto/visualizarAdmin", $dados);
}

/** A */
function ListarTodosProdutos() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/** A */
function adicionar() {
    if (ehPost()) {
        $preco = $_POST["preco"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_POST["imagem"];
        $categoria = $_POST["categorias"];
        $estoqueminimo = $_POST["estoqueminimo"];
        $estoquemaximo = $_POST["estoquemaximo"];
        
        
        $temp_imagem = $_FILES['imagem']['tmp_name'];
        $name_imagem = $_FILES['imagem']['name'];
        $imagem = upload($temp_imagem,$name_imagem);
        echo "<img src='$imagem'>";
        
        
        $msg = adicionarProduto( $categoria, $preco, $nome, $descricao, $tamanho, $imagem, $estoqueminimo, $estoquemaximo);
        
        redirecionar("produtos/ListarTodosProdutos");
        
    } else {
        $categorias = array();
        $categorias = pegarTodasCategorias();
        
        $dados["categorias"] = $categorias;
        exibir("produto/formulario", $dados);
    }
}

/** A */
function editar($idproduto) {
    if (ehPost()) {
        $preco = $_POST["preco"];
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_POST["imagem"];
        $categoria = $_POST["nome"];
        $estoqueminimo = $_POST["estoqueminimo"];
        $estoquemaximo = $_POST["estoquemaximo"];
        
        $msg = editarUsuario($preco, $nome, $descricao, $tamanho, $imagem, $categoria, $estoqueminimo, $estoquemaximo);
        echo $msg;
        
    } else {
        $dados["usuario"] = pegarProdutoPorId($idproduto);
        exibir("produto/formulario", $dados);
    }
}

/** A */
function deletar($idproduto) {
    deletarProduto($idproduto);
    redirecionar("produtos/ListarTodosProdutos");
}
