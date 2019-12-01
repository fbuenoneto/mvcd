<?php


function adicionarEndereco($idusuario,$logradouro,$numero,$complemento,$bairro,$cidade,$cep) {
    $sql = "INSERT INTO endereco (idusuario,logradouro,numero,complemento,bairro,cidade,cep) "
            . "VALUES ('$idusuario','$logradouro','$numero','$complemento','$bairro','$cidade','$cep')";
    
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

function pegarEnderecoPorId($idusuario) {
    $sql = "SELECT * FROM endereco WHERE idusuario = '$idusuario'";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function deletarEndereco($idendereco) {
    $sql = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar Endereço' . mysqli_error($cnx)); }
    return 'Endereço deletado com sucesso!';
            
}

function pegarEnderecosPorUsuario($idusuario){
    $sql = "SELECT * FROM endereco WHERE idusuario = '$idusuario'" ;
    $resultado = mysqli_query(conn(),$sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[] = $linha;
    }
   return $enderecos; 
}

