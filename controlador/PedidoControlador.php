<?php
require_once("modelo/formaPagamentoModelo.php");
require_once("modelo/produtoModelo.php");
require_once("modelo/PedidoModelo.php");

function index(){
    redirecionar("pedido/adicionar");
}

function finalizar(){
    $carrinho = $_SESSION["carrinho"];
    $soma = $_SESSION[""];
    
}

function adicionar(){
    if(ehPost()){
     $FormaP = $_POST["formaP"];
     $endereco = $_POST["endereco"];
     $Cupom = $_POST["cupom"];
     $Preco = $_POST["carrinho"];
    
     adicionarPedido($FormaP,$endereco,$Cupom,$Preco);
     
    }else{
    $formas = array();
    $formas = pegarTodasFormas();
    $carro = $_SESSION["carrinho"];
    
    $soma = 0;
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoPorId($id);
        $soma += $produto["preco"];
    }
    
    $dados["total"] = $soma;    
    $dados["formas"] = $formas;
    $dados["carrinho"] = $carro;
    exibir("pedido/pedido", $dados);
    } 
}


//function salvar(){
     //$endereco = $_POST["endereco"];
     //$cupom = $_POST["cupom"];
     //$preco = $_POST["preco"];
     //$carrinho = $_SESSION["carrinho"];

 
//}