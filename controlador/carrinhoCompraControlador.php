<?php
require_once "modelo/produtoModelo.php";

function comprar($idProduto) {   
    $_SESSION["carrinho"][] = $idProduto;
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */ 

function exibirCarrinho() {
    $listaDeProdutos= array();
    
    $soma = 0;
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoPorId($id);
        $soma += $produto["preco"];
        $listaDeProdutos[]=$produto;
    }
    $dados["total"] = $soma;
    $dados["produtos"] = $listaDeProdutos;
    exibir("carrinho/carrinho", $dados);
}
//else{
  //  $msg = "Carrinho Vazio";
    //exibir("carrinho/carrinho",$msg);
//}

/** anon */

function tirar($idProduto) {        
    for ($i=0;$i<=count($_SESSION["carrinho"]);$i++){
        if ($_SESSION["carrinho"][$i]==$idProduto){
            $indice=$i;
        }
    }
    unset($_SESSION["carrinho"][$indice]);
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

function limparCarrinho() {
    unset($_SESSION['carrinho']);
    redirecionar("./carrinhoCompra/exibirCarrinho");
}

/** anon */
function desconto(){
    
}    