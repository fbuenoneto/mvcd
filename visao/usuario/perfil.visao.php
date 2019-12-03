<h2>Olá cliente <?=$usuario['nomeusuario']?></h2>


<p>Nome: <?=$usuario['nomeusuario']?></p>
<p>E-mail: <?=$usuario['email']?></p>
<p>Senha: <?=$usuario['senha']?></p>
<p>Cpf: <?=$usuario['cpf']?></p>
<p>Data de nascimento: <?=$usuario['datadenascimento']?></p>
<p>------------------------------------</p>

<p><a href="./endereco/adicionar/<?=$usuario['idusuario']?>" style="text-decoration:none; color: black">Adicionar Endereço</a></p>
<p><a href="./endereco/ListarTodosEnderecosPorId/<?=$usuario['idusuario']?>" style="text-decoration:none; color: black">Listar Endereços Cadastrados</a></p>
<p><a href="./usuario/MeuPedido" style="text-decoration:none; color: black">Ver meus pedidos</a></p>
<p><a href="./usuario/editar/<?=$usuario['idusuario']?>" style="text-decoration:none; color: black">Editar meu perfil</a></p>
<p><a href="./login/logout" style="text-decoration:none; color: black">Sair de sua sessão-></a></p>

