<?php

function adicionarCategoria($nome, $descricao) {
    $sql = "INSERT INTO categoria (nome,descricao) VALUES ('$nome','$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar Categoria' . mysqli_error($cnx)); }
    return 'Categoria cadastrada com sucesso!';
}

function pegarTodasCategorias() {
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categoria = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $categoria[] = $linha;
    }
    return $categoria;
}

function deletarCategoria($idcategoria) {
    $sql = "DELETE FROM categoria WHERE idcategoria = $idcategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar categoria' . mysqli_error($cnx)); }
    return 'Categoria deletada com sucesso!';
            
}