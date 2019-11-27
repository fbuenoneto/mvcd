<?php 

function adicionarPedido($idUsuario,$FormaP,$endereco, $Cupom, $Preco){
    $sql = "INSERT INTO pedido(idusuario, idendereco, FormaPagamento, Cupom, Preco, datacompra) VALUES ('$idUsuario','$endereco','$FormaP','$Cupom','$Preco', curdate())";
    $resultado = mysqli_query($cnx = conn(), $sql);
        if(!$resultado) { die('Erro ao cadastrar' . mysqli_error($cnx)); }
    return 'Cadastrado com sucesso!';
}

function salvar(){
    
}