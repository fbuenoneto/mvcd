<?php
require_once 'modelo/produtoModelo.php';

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon*/
function index() {
    $dados["produto"] = pegarTodosProdutos();
    exibir("./paginas/inicial",$dados);
}

function admin(){
    exibir("./paginas/administrador");
}

function sobre(){
    exibir ("paginas/sobre");
}