<?php
function adicionarFormaPagamento($descricao) {
    $sql = "INSERT INTO formapagamento(descricao) VALUES ('$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar forma de pagamento' . mysqli_error($cnx)); }
    return 'Forma de pagamento cadastrada com sucesso!';
}
function pegarTodasFormas() {
    $sql = "SELECT * FROM formaPagamento";
    $resultado = mysqli_query(conn(), $sql);
    $formas = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $formas[] = $linha;
    }
    return $formas;
}
function editarForma($idForma,$descricao) {
    $sql = "UPDATE formapagamento SET descricao = '$descricao' WHERE idFormaPagamento = '$idForma'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar forma de pagamento' . mysqli_error($cnx)); }
    return 'Forma de pagamento alterado com sucesso!';
}
function pegarFormaPorId($idForma) {
    $sql = "SELECT * FROM formaPagamento WHERE idFormaPagamento = $idForma";
    $resultado = mysqli_query(conn(), $sql);
    $formas = mysqli_fetch_assoc($resultado);
    return $formas;
}

function deletarForma($idForma) {
    $sql = "DELETE FROM formaPagamento WHERE idFormaPagamento = $idForma";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar forma de pagamento' . mysqli_error($cnx)); }
    return 'Forma de Pagamento deletada com sucesso!';
            
}