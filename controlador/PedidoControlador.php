<?php
require_once("modelo/formaPagamentoModelo.php");
require_once("modelo/produtoModelo.php");
require_once("modelo/PedidoModelo.php");
require_once("modelo/enderecoModelo.php");

function index(){
    redirecionar("pedido/adicionar");
}

function finalizar(){
    $carrinho = $_SESSION["carrinho"];
    $soma = $_SESSION[""];
    
}

function adicionar(){
    if(ehPost()){     
        
     $soma = 0;
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoPorId($id);
        $soma += $produto["preco"];
        $listaDeProdutos[]=$produto;
    }
    
     $idusuario = acessoPegarIdUsuarioLogado();
     $FormaPagamento = $_POST["formaP"];
     $endereco = $_POST["endereco"];
     $Cupom = $_POST["cupom"];
     $Preco = $soma;
     
     $msg = adicionarPedido($idusuario,$FormaPagamento, $endereco, $Cupom, $Preco);
     echo $msg;
     exibir("paginas/fim");
    }
    
    else{
    $formas = array();
    $formas = pegarTodasFormas();
    $carro = $_SESSION["carrinho"];
    $idUsuario = acessoPegarIdUsuarioLogado();
    $rua = pegarTodosEnderecos($idUsuario); 
    
    $soma = 0;
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoPorId($id);
        $soma += $produto["preco"];
    }
    
    $dados["total"] = $soma;    
    $dados["formas"] = $formas;
    $dados["carrinho"] = $carro;
    $dados["endereco"] = $rua;
    exibir("pedido/pedido", $dados);
    } 
}

