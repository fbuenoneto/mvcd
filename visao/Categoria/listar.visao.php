<h2>Listar todas as Categorias </h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
        </tr>
    </thead>
    <?php foreach ($categoria as $categoria): ?>
    <tr>
        <td><?=$categoria['idcategoria']?></td>
        <td><?=$categoria['nome']?></td>
        <td><?=$categoria['descricao']?></td>
        <td><a href="./categorias/deletar/<?=$categoria['idcategoria']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./categorias/adicionar" class="btn btn-primary">Adicionar nova Categoria</a>

