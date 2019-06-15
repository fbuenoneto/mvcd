<form action="" method="POST">
    Nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    E-mail: <input type="text" name="email" value="<?=@$usuario['email']?>">
    Senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
    Cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>">
    Data de Nascimento: <input type="text" name="datadenascimento" value="<?=@$usuario['datadenascimento']?>">
    Sexo: <input type="text" name="sexo" value="<?=@$usuario['sexo']?>">
    Tipo de Usuário: <input type="text" name="tipousuario" value="<?=@$usuario['tipousuaio']?>">
    
    <button type="submit">Enviar</button>
</form>