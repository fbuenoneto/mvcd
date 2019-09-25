<h2>Listar usuários todos</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>DETALHAR</th>
            <th>EDITAR</th>
            <th>DELETAR </th>
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['idusuario']?></td>
        <td><?=$usuario['nomeusuario']?></td>
        <td><?=$usuario['email']?></td>
        <td><a href="./usuario/visualizar/<?=$usuario['idusuario']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-secondary">Detalhar</a></td>
        <td><a href="./usuario/editar/<?=$usuario['idusuario']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-info">Editar</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['idusuario']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Adicionar novo usuario</a>

