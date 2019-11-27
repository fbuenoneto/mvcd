<?php
require_once ("modelo/AdministradorModelo.php");

function listaProdutosCategoria() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoCategoria();
	exibir("administrador/Categoria", $dados);
}

function listaProdutosQuantidadeEstoque() {
	$dados = array();
	$dados["adm"] = pegarTodosProdutoEstoque();
	exibir("administrador/listaProdutoseQuantidadedoEstoque", $dados);
}

function listaPedidosMunicipio() {
	$dados = array();
	$dados["adm"] = pegarTodosPedidosMunicipio();
	exibir("administrador/listaCidade", $dados);	
}

function totalFaturamentoPeriodo() {
    if (ehPost()){
		$fatu = $_POST ['tipo'];
		$dados = array();
                $dados["adm"] = pegarTodosTotalFaturamamento($fatu);
                exibir("adm/totalFaturamentoPeriodo", $dados);
	}else{
		exibir("administrador/faturamento");
	} 
}

function listarPedidosPorData() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosData($datad1, $datad2); 
		exibir("administrador/listarD", $dados);
	}else{
		exibir("administrador/Data");
	} 
}