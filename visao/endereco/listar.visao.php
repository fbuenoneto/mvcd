<h2>Listar todos os Enderecos Cadastrados</h2>


<table class="table">
    <thead>
        <tr>
            <th>IdEndereco</th>
            <th>IdUsuario</th>
            <th>logradouro</th>
            <th>numero</th>
            <th>complemento</th>
            <th>bairro</th>
            <th>cidade</th>
            <th>cep</th>
        </tr>
    </thead>
    <?php foreach ($endereco as $end): ?>
    <tr>
       <td><?=$end['idendereco']?></td>
       <td><?=$end['idusuario']?></td>
       <td><?=$end['logradouro']?></td>
       <td><?=$end['numero']?></td>
       <td><?=$end['complemento']?></td>
       <td><?=$end['bairro']?></td>
       <td><?=$end['cidade']?></td>
       <td><?=$end['cep']?></td>
        <td><a href="./endereco/editar/<?=$end['idendereco']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-info">Editar</a></td>
        <td><a href="./endereco/deletar/<?=$end['idendereco']?>" style="text-decoration:none; color: inherit" class="btn btn-secondary" class="btn btn-danger">Deletar</a></td>
    </tr>
    
</table>

<a href="./endereco/adicionar/<?=$end['idusuario']?>" style="text-decoration:none; color: inherit">Adicionar novo Endereco</a>

<?php endforeach; ?>