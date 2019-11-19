<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon*/
function index() {
    exibir("paginas/inicial");
}

function admin(){
    exibir("paginas/administrador");
}

function sobre(){
    exibir ("paginas/sobre");
}