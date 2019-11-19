<h2> Listar todas as categorias </h2>

<table class="table"> 
    <thead> 
        <tr> 
            <th>ID</th>
            <th> Nome</th>
            <th> Descrição </th>
        </tr>    
    </thead>
    <?php foreach ($categoria as $categoria): ?>
    <tr>
        <td><?=$categoria['idcategoria']?></td>
        <td><?=$categoria['nome']?></td>
        <td><?=$categoria['descricao']?></td>
        <td><a href="./categorias/deletar/<?=$categoria['idcategoria']?>" style="text-decoration: none; color: inherit" class="btn btn-secondary" class="btn btn-danger"> Deletar </a> </td>
    </tr>    
    <?php endforeach; ?>
</table>

<a href="./categorias/adicionar" style="text-decoration: none; color: inherit" class="btn btn-secondary" class="btn btn-danger"> Adicionar Categoria </a>