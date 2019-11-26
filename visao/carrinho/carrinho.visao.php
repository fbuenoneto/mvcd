<h2>Produtos Comprados</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Deletar</th>
        </tr>
    </thead>
    
    <?php 
    foreach ($produtos as $produto):
    ?> 
    
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinhoCompra/tirar/<?=$produto['idproduto']?>" style="text-decoration:none; color: inherit">Deletar</a></td>
    </tr>
       
    <?php endforeach; ?>
    
</table>
<p>Total: R$<?=$total?></p>
<p><a href="./carrinhoCompra/limparCarrinho"style=" text-decoration:none; color: inherit">Limpar Carrinho</a></p>
<p><a href="./pedido/" style="text-decoration:none; color: inherit">Finalizar Pedido</a></p>
<a href="./produtos/ListarTodosProdutos" style="text-decoration:none; color: inherit">Continuar Comprando</a>

