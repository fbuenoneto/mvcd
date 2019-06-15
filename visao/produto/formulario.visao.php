<form action="" method="POST">
    Preço: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>">
    Descrição: <input type="text" name="descricao" value="<?=@$produto['descricao']?>">
    Tamanho: <input type="text" name="tamanho" value="<?=@$produto['tamanho']?>">
    Imagem: <input type="text" name="imagem" value="<?=@$produto['imagem']?>">
    Categoria: <input type="text" name="categoria" value="<?=@$produto['categoria']?>">
    Estoque Mínimo: <input type="text" name="estoqueminimo" value="<?=@$produto['estoqueminimo']?>">
    Estoque Máximo: <input type="text" name="estoquemaximo" value="<?=@$produto['estoquemaximo']?>">
    
    <button type="submit">Enviar</button>
</form>
