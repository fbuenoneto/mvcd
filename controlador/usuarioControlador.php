<?php

require_once "modelo/usuarioModelo.php";
require_once "modelo/PedidoModelo.php";

/** anon */
function ListarTodosUsuarios() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}
/** anon */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $datadenascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipousuario = "p";
        
        $msg = adicionarUsuario($nome, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario);
        
        redirecionar("paginas/inicial", $msg);
        
     //$errors = array(); 

	//if(strlen(trim($email))==0){
	
	//$errors[] = "Voce deve inserir um e-mail.";
//}else{
//	if (filter_var($email, FILTER_VALIDATE_EMAIL) == false){

//	$errors[] = "Inserir um e-mail válido.";
//	}
//    }

//if(strlen(trim($cpf))==0){
	
//	$errors[] = "Voce deve inserir um CPF";
//}else{
//	if (filter_var($cpf, FILTER_VALIDATE_EMAIL) == false){

//	$errors[] = "Inserir um CPF válido.";
//	}
//}


//if (count($errors) > 0){
	
//	$dados = array();
//	$dados["errors"] = $errors;
//	exibir("usuario/formulario", $dados);

//}else{
//	$msg =adicionaCliente($email, $cpf);
//	redirecionar("usuario/ListarTodosUsuarios");

//     }

}else {
	exibir("usuario/formulario");
}

} 

/** P, A */
function deletar($id) {
    deletarUsuario($id);
    redirecionar("usuario/ListarTodosUsuarios");
}

/** anon */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $datadenascimento = $_POST["datadenascimento"];
        $sexo = $_POST["sexo"];
        $tipousuario = $_POST["tipousuario"];
        
        $msg = editarUsuario($id,$nome, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario);
        echo $msg;
        
    } else {
        $dados["usuario"] = pegarUsuarioPorId($id);
        exibir("usuario/formulario", $dados);
    }
}

/** anon */
function visualizar($id) {
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/visualizar", $dados);
}

function MeuPedido(){
  $idusuario = acessoPegarIdUsuarioLogado();
  $dados["pedidos"]=  PedidosUsuario($idusuario);   
  exibir('usuario/PedidosFeitos', $dados);
}



