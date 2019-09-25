<h2>Listar todas as Formas de Pagamento </h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
        </tr>
    </thead>
    <?php foreach ($formas as $forma): ?>
    <tr>
        <td><?=$forma['idForma']?></td>
        <td><?=$forma['descricao']?></td>
        <td><a href="./formaPagamento/editar/<?=$forma['idForma']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Editar</a></td>
        <td><a href="./formaPagamento/deletar/<?=$forma['idForma']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./formaPagamento/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-primary">Adicionar Forma de Pagamento</a>