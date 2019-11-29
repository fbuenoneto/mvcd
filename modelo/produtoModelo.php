<?php

function pegarProdutoPorNome($nome){
    $sql = "SELECT * FROM produtos where nomeproduto like '%$nome%'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}


function adicionarProduto($categoria, $preco, $nome, $descricao, $tamanho, $imagem,  $estoqueminimo, $estoquemaximo) {
    $sql = "INSERT INTO produtos (idcategoria, preco,nomeproduto,descricao,tamanho,imagem,estoque_minimo,estoque_maximo) "
            . "VALUES ('$categoria','$preco','$nome', '$descricao', '$tamanho', '$imagem', '$estoqueminimo', '$estoquemaximo')";
    
   echo $sql; 
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
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


//Função de pesquisa quem sabe
//function pegarProdutoPorId($idproduto) {
    //$sql = "SELECT produtos.*, categoria.nome FROM produtos"
            //. "inner join categoria on produtos.idcategoria=categoria.idcategoria"
            //. "WHERE idproduto= $idproduto";
    //$resultado = mysqli_query(conn(), $sql);
    //$produtos = mysqli_fetch_assoc($resultado);
    //return $produtos;
//}