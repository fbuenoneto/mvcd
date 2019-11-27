<h1> Produtos listados por Categoria </h1>

<table class="table" border="1">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Categoria</th>
		</tr>
	</thead>
		<?php foreach ($adm as $produto): ?>
			<tr>
                            <td><?=$produto['nomeproduto']?></td><br>
                            <td><?=$produto['categ']?></td>
			</tr>
		<?php endforeach; ?>
</table>
