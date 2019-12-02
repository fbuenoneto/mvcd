<?php 

function adicionarPedido($idusuario,$FormaPagamento,$endereco, $Cupom, $Preco){
    $sql = "CALL cadastrar_pedido($idusuario,$FormaPagamento,$endereco, $Cupom, $Preco)";
    $resultado = mysqli_query($cnx = conn(), $sql);
        if(!$resultado) { die('Erro ao cadastrar' . mysqli_error($cnx)); }
    return 'Cadastrado com sucesso!';
}


function PedidosUsuario($idusuario){    
    $sql = "call MostrarPedidoUsuario($idusuario)";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos=array();
    while($linha = mysqli_fetch_assoc($resultado)){
        $pedidos[] = $linha;
    }
    return $pedidos;
}

//"INSERT INTO pedido(idusuario, idendereco, FormaPagamento, Cupom, Preco, datacompra) VALUES ('$idUsuario','$endereco','$FormaP','$Cupom','$Preco', curdate())";

function salvar(){
    
}