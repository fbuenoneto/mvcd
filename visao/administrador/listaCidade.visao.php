
<br><h2>Lista de pedidos por município </h2>

<table class="table" border="1">
	<thead>
		<tr>
	
			<th>Total</th>
			<th>Cidade</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($adm as $pedido): ?>
			<tr>
                    <br><td><?=$pedido['Preco']?></td>
                    <td><?=$pedido['cidade']?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
