<h2>Visão</h2>
<p>id: <?=$produtos['idproduto']?></p>
<p>nome: <?=$produtos['nomeproduto']?></p>
<p>preço: <?=$produtos['preco']?></p>
<p>Descrição: <?=$produtos['descricao']?></p>
<p>Tamanho: <?=$produtos['tamanho']?></p>
<p>Imagem: <?=$produtos['imagem']?></p>
<p>Categoria: <?=$produtos['idcategoria']?></p>
<p>Estoque mínimo: <?=$produtos['estoque_minimo']?></p>
<p>Estoque máximo: <?=$produtos['estoque_maximo']?></p>
<p><a href="./carrinhoCompra/comprar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: black" class="btn btn-danger">Comprar Item</a></p>
<p><a href="./produtos/ListarTodosProdutos" style="text-decoration:none; color: black" class="btn btn-danger">Voltar</a></p>
