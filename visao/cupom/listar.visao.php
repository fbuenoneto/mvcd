<h2>Listar todos os Cupons</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCONTO</th>
        </tr>
    </thead>
    <?php foreach ($cupom as $cupom): ?>
    <tr>
        <td><?=$cupom['idcupom']?></td>
        <td><?=$cupom['nomecupom']?></td>
        <td><?=$cupom['desconto']?></td>
        <td><a href="./cupom/editar/<?=$cupom['idcupom']?>" class="btn btn-info">edit</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo Cupom</a>