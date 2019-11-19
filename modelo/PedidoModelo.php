<?php 

function adicionarPedido(){
    $sql = "INSERT INTO pedido(idusuario, idendereco, datacompra) VALUES ('$dusuario, $idendereco, $datacompra')";
         $resultado = mysqli_query($cnx = conn(), $sql);
        if(!$resultado) { die('Erro ao cadastrar forma de pagamento' . mysqli_error($cnx)); }
    return 'Pedido cadastrado com sucesso!';
}

function salvar(){
    
}