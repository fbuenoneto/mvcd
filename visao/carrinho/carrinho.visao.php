<h2>Produtos Comprados</h2>

<table class="table">
    <thead>
        <tr>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
            <th>DELETAR </th>
        </tr>
    </thead>
    <?php 
    $soma = 0;
    foreach ($produtos as $produto): 
        
     $soma = $soma + $produto['preco']; ?>
    
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinhoCompra/tirar/<?=$produto['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    
    <?php endforeach; ?>
 
</table>

<p>Total: <?php
echo $soma; ?></p>
<a href="./produtos/ListarTodosProdutos" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Continuar Comprando</a>

