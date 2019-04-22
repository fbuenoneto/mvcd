function visualizar(){
    $dados= array();
    $dados["nome"]="Donnuts";
    $dados["descricao"]="Cobertura de chocolate com granulado";
    $dados["preco"]="R$5,00";
    
    exibir("paginas/visualizar",$dados);
}