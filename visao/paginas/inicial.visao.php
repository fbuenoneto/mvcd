<h1>Donuts Café</h1>    

<h2>Produtos</h2>

<div id="produtos">
<?php foreach ($produto as $produtos): ?>
    <div id="produto">
    <tr>
        <td><img id="imageminicial" src="<?=$produtos['imagem']?>"></td>
        <div id="textop">
        <br><td><?=$produtos['nomeproduto']?></td>
        <br>Preço:R$<td><?=$produtos['preco']?>,00</td>
        <br>Descrição:<td><?=$produtos['descricao']?></td>
        <br><div id="detalhar"><td><a href="./produtos/visualizar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit">Detalhar-></a></td></div>
        </div>
    </tr>
    </div>
    <?php endforeach; ?>
</div>