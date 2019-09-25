<h1>Cadastrar Endereço </h1>

<form action="" method="POST">
    <p>Logradouro: <input type="text" name="logradouro" value="<?=@$endereco['logradouro']?>"></p>
    <p>Número: <input type="text" name="numero" value="<?=@$endereco['numero']?>"></p>
    <p>Complemento: <input type="text" name="complemento" value="<?=@$endereco['complemento']?>"></p>
    <p>Bairro: <input type="text" name="bairro" value="<?=@$endereco['bairro']?>"></p>
    <p>Cidade: <input type="text" name="cidade" value="<?=@$endereco['cidade']?>"></p>
    <p>CEP: <input type="text" name="cep" value="<?=@$endereco['cep']?>"></p>
    
    <button type="submit">Cadastrar</button>
</form>