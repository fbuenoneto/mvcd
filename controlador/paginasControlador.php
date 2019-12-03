<?php
require_once 'modelo/produtoModelo.php';
require_once 'modelo/usuarioModelo.php';

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon*/
function index() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("./paginas/inicial",$dados);
}

/** A*/
function admin(){
    exibir("./paginas/administrador");
}

/** A,P*/
function usuario(){
    $id = acessoPegarIdUsuarioLogado();
    $dados["usuario"] = pegarUsuarioPorId($id);
    exibir("usuario/perfil", $dados);
}


function sobre(){
    exibir ("paginas/sobre");
}