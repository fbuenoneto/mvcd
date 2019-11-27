<br><h2>listar Faturamento</h2>

<table class="table" border="1">
	<thead>
		<tr>
                        <th>Período</th>
			<th>Fatura</th>

		</tr>
	</thead>
		<?php foreach ($adm as $faturamento): ?>
			<tr>
                            <td><?=$faturamento['data']?></td>
                            <td><?=$faturamento['fatura']?></td>
			</tr>
		<?php endforeach; ?>
	</div>
</table></h2>

