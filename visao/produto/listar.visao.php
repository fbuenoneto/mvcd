<h2>Listar todos Produtos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>DESCRIÇÃO</th>
            <th>DETALHAR</th>
            <th>EDITAR</th>
            <th>DELETAR </th>
        </tr>
    </thead>
    <?php foreach ($produto as $produtos): ?>
    <tr>
        <td><?=$produtos['idproduto']?></td>
        <td><?=$produtos['nomeproduto']?></td>
        <td><?=$produtos['preco']?></td>
        <td><?=$produtos['descricao']?></td>
        <td><a href="./produtos/visualizar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-secondary">Detalhar</a></td>
        <td><a href="./produtos/editar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-info">Editar</a></td>
        <td><a href="./produtos/deletar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./produtos/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Adicionar novo Produto</a>