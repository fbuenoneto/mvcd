<?php


function adicionarEndereco($logradouro,$numero,$complemento,$bairro,$cidade,$cep) {
    $sql = "INSERT INTO endereco (logradouro,numero,complemento,bairro,cidade,cep) "
            . "VALUES ('$logradouro','$numero','$complemento','$bairro','$cidade','$cep')";
    
   echo $sql; 
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar endereço' . mysqli_error($cnx)); }
    return 'Endereço de cliente cadastrado com sucesso!';
}

function pegarTodosEnderecos() {
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function pegarEnderecoPorId($idendereco) {
    $sql = "SELECT * FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = mysqli_fetch_assoc($resultado);
    return $enderecos;
}

function deletarEndereco($idendereco) {
    $sql = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Endereço' . mysqli_error($cnx)); }
    return 'Endereço deletado com sucesso!';
            
}


