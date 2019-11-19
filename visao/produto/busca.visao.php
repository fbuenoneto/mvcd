<h2>Todos os Produtos Encontrados</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Detalhar</th>
        </tr>
    </thead>
    <?php foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['idproduto']?></td>
        <td><?=$produtos['nomeproduto']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$produtos['descricao']?></td>
        <td><a href="./produtos/visualizar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-secondary">Detalhar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
