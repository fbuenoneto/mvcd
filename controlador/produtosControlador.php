<?php
function visualizar(){
    $dados= array();
    $dados["nome"]="Donnuts";
    $dados["descricao"]="Cobertura de chocolate com granulado";
    $dados["preco"]="R$5,00";
    
    exibir("paginas/visualizar",$dados);
}

function adicionar(){
    if (ehPost()){
        
        $nome = $_POST["usuario"];
        $email = $_POST["email"];
        $produto = $POST["produto"];
        $senha = $_POST["senha"];
        
        redirecionar ("usuario/index");
    }else{
        exibir ("paginas/formulario");
}
}
