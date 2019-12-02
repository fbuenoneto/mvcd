<h1>Cadastrar novos Produtos</h1>

    <img src="./publico/upload/donuts.jpg">
    
<form action="" method="POST" enctype="multipart/form-data">
    <p>Preço: <input type="text" name="preco" value="<?=@$produto['preco']?>"></p>
    <p>Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>"></p>
    <p>Descrição: <input type="text" name="descricao" value="<?=@$produto['descricao']?>"></p>
    <p>Tamanho: <input type="text" name="tamanho" value="<?=@$produto['tamanho']?>"></p>
    <p> Imagem: <br><input type="file" name="imagem"></p>
  
   <p>Categorias: 
        <select name="categorias">
		<option value="default">Selecione uma categoria</option>
		
		<?php foreach ($categorias as $categoria):?>
                    <option value="<?=$categoria["idcategoria"]?>"><?=$categoria["nome"]?></option>
		<?php endforeach;?>
	</select><br></p>
    <p>Estoque Mínimo: <input type="text" name="estoqueminimo" value="<?=@$produto['estoqueminimo']?>"></p>
    <p>Estoque Máximo: <input type="text" name="estoquemaximo" value="<?=@$produto['estoquemaximo']?>"></p>
    <p>Quantidade de Estoque: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>"></p>
    
    <button type="submit">Enviar</button>
</form>
