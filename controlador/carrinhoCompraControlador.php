<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/formaPagamentoModelo.php";

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
function desconto($total){
    if(ehPost()){
       $desconto = 0;
       $nome = $_POST["nomec"];
       $desconto = pegardescontoPorNome($nome);
       $desconto = $desconto['desconto']/100;
       $formas = array();
        $formas = pegarTodasFormas();
        $idUsuario = acessoPegarIdUsuarioLogado();
        $rua = pegarTodosEnderecos($idUsuario); 

        $dados["formas"] = $formas;
        $dados["endereco"] = $rua;
    
   $dados["total"] = number_format($total - ($total * $desconto),2); 
   
   exibir('pedido/pedido', $dados);
   }else{
       redirecionar("pedido/adicionar");
   }
}
 