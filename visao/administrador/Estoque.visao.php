
<br><h2>Listar Produtos e Quantidade </h2>

<table class="table" border="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Estoque</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td><?=$produto['nomeproduto']?></td><br>
				<td><?=$produto['quant_estoque']?></td>
			</tr>
		<?php endforeach; ?>
</table>
