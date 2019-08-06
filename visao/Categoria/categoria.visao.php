<h1>Cadastrar Categoria </h1>

<form action="" method="POST">
    <p>Nome: <input type="text" name="nome" value="<?=@$categoria['nome']?>"></p>
    <p>Descrição: <input type="text" name="descricao" value="<?=@$categoria['descricao']?>"></p>
    
    <button type="submit">Cadastrar</button>
</form>