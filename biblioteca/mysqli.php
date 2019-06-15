<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "lojaWeb");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}