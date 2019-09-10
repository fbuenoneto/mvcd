<?php 
     if(ehPost()){
         foreach($errors as $erro){
             echo "$erro<br>";
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
    <p>Sexo: <input type="text" name="sexo" value="<?=@$usuario['sexo']?>"></p>
    <p>Tipo de Usuário: <input type="text" name="tipousuario" value="<?=@$usuario['tipousuaio']?>"></p>
    
    <button type="submit">Enviar</button>
</form>