<?php

function adicionarCupom($nome, $desconto) {
    $sql = "INSERT INTO cupom (nomecupom,desconto) VALUES ('$nome','$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
    return 'Cupom cadastrado com sucesso!';
}

function pegarTodosCupons() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}

function editarCupom($idcupom,$nome, $desconto) {
    $sql = "UPDATE cupom SET nomecupom = '$nome', desconto = '$desconto' WHERE idcupom = $idcupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cupom' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}

function pegarCupomPorId($idcupom) {
    $sql = "SELECT * FROM cupom WHERE idcupom = $idcupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}

function deletarCupom($idcupom) {
    $sql = "DELETE FROM cupom WHERE idcupom = $idcupom";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar forma de pagamento' . mysqli_error($cnx)); }
    return 'Forma de Pagamento deletada com sucesso!';
            
}

function pegardescontoPorNome($nome){
    $sql = "SELECT desconto FROM cupom WHERE upper(nomecupom) like upper('%".$nome."%')";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}