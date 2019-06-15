<?php

function adicionarProduto($preco,$nome, $descricao, $tamanho, $imagem, $categoria, $estoqueminimo, $estoquemaximo) {
    $sql = "INSERT INTO produtos (preco,nomeproduto,descricao,tamanho,imagem,categoria,estoque_minimo,estoque_maximo) VALUES ('$preco','$nome', '$descricao', '$tamanho', '$imagem', '$categoria', '$estoqueminimo', '$estoquemaximo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar usuário' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function pegarTodosProdutos() {
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function pegarProdutoPorId($idproduto) {
    $sql = "SELECT * FROM produtos WHERE idproduto= $idproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = mysqli_fetch_assoc($resultado);
    return $produtos;
}

function deletarProduto($idproduto) {
    $sql = "DELETE FROM produtos WHERE idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
            
}