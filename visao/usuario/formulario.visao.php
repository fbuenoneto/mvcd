<?php 
   if(ehPost()){
     foreach($errors as $erro){
    echo $erro;"<br>";
    }
}
?>

<h1>Bem Vindo!</h1>

 <link rel="stylesheet" href="style.css">

<form action="" method="POST">
    <p>Nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>"></p>
    <p>E-mail: <input type="text" name="email" value="<?=@$usuario['email']?>"></p>
    <p>Senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>"></p>
    <p>Cpf: <input type="text" name="cpf" value="<?=@$usuario['cpf']?>"></p>
    <p>Data de Nascimento: <input type="text" name="datadenascimento" value="<?=@$usuario['datadenascimento']?>"></p>
    Sexo:<br>
    <?php if(isset($usuario) && $usuario ['sexo']=="M"):?>
    <input type="radio" name="sexo" value="M" checked="checked">Masculino<br>
    <input type="radio" name="sexo" value="F">Feminino<br>
    <?php else:?>
    <input type="radio" name="sexo" value="M">Masculino<br> 
    <input type="radio" name="sexo" value="F" checked="checked">Feminino<br>
    <?php endif;?>
    
    <p>Tipo de usuario:<br>
    <?php if(isset($usuario) && $usuario ['tipousuario']=="P"):?>
    <input type="radio" name="tipousuario" value="P" checked="checked">Usuário Padrão<br>
    <input type="radio" name="tipousuario" value="A">Administrador<br>
    <?php else:?>
    <input type="radio" name="tipousuario" value="P">Usuário Padrão<br> 
    <input type="radio" name="tipousuario" value="A" checked="checked">Administrador<br>
    <?php endif;?></p>
    
    <button type="submit">Enviar</button>
</form>