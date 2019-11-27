<h2>Listar todos Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Detalhar</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <?php foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['idproduto']?></td>
        <td><?=$produtos['nomeproduto']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$produtos['descricao']?></td>
        <td><a href="./produtos/visualizarAdmin/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-secondary">Detalhar</a></td>
        <td><a href="./produtos/editar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-info">Editar</a></td>
        <td><a href="./produtos/deletar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./produtos/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Adicionar novo Produto</a>