<h1>Cadastrar Cupom</h1>

<form action="" method="POST">
    <p>Nome: <input type="text" name="nome" value="<?=@$cupom['nome']?>"></p>
    <p>Desconto: <input type="text" name="desconto" value="<?=@$cupom['desconto']?>"></p>
    
    <button type="submit">Cadastrar</button>
</form>