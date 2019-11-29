<?php

function upload($tempname_imagem,$name_imagem) {
    $extensao = strtolower(substr($name_imagem, -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "./publico/upload/";
    move_uploaded_file($tempname_imagem, $diretorio . $novo_nome);
    return $diretorio . $novo_nome;
}
