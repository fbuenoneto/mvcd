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
        <td><a href="./cupom/editar/<?=$cupom['idcupom']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-info">Editar</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['idcupom']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./cupom/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Adicionar novo Cupom</a>