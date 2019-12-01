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
    if(ehPost()){
       $nome = $_POST["nomec"];
       $desconto = pegardescontoPorNome($nome);
       $desconto = $desconto['desconto']/100;
       
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  pegarProdutoPorId($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $id_cliente = acessoPegarUsuarioLogado();
   
    $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = number_format($total - ($total * $desconto),2); 
   $dados['usuario'] =  pegarUsuarioPorId($id);
   $dados['enderecos'] = pegarEnderecosPorUsuario($idusuario);
   $dados['formapg'] =  pegarTodasFormas();
   
   exibir('finalizar/finalizar', $dados);
   }else{
       $total = 0;
    
   if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        foreach ($produtos as $produto):
            $prod =  MostrarProdutoPorCodigo($produto);
            $todos[] = $prod;
            $total += $prod["preco"];
        endforeach;
    } else {
        echo "Carrinho vazio!";
    }
   
    $id_cliente = acessoPegarUsuarioLogado();
   $dados = array();
   
   $dados["produto"] = $todos;
   $dados["total"] = $total; 
   $dados['cliente'] = MostrarClientePorCodigo($id_cliente);
   $dados['enderecos'] = pegarEnderecosPorUsuario($id_cliente);
   $dados['formapg'] = pegarTodasFormasDePagamento();
   exibir('finalizar/finalizar', $dados);
   }
}
 