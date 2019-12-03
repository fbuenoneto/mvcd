<div id="tudo">
    <h1><?=$produtos['nomeproduto']?></h1>
    <table id="tabela" border="0">
      <tr>
        <th>Produto</th>
        <th> Descrição </th>
      </tr>
      <tr>
        <img id="imagemt" src="<?=$produtos['imagem']?>">
        <td id="texto"> 
            <p>ID: <?=$produtos['idproduto']?></p>
            <p>Nome: <?=$produtos['nomeproduto']?></p>
            <p>Preço: <?=$produtos['preco']?></p>
            <p>Descrição: <?=$produtos['descricao']?></p>
            <p>Tamanho: <?=$produtos['tamanho']?></p>
            <p>Categoria: <?=$produtos['idcategoria']?></p>
            <p><a href="./carrinhoCompra/comprar/<?=$produtos['idproduto']?>" style="text-decoration:none; color: black" class="btn btn-danger">Comprar Item</a></p>
        </td>
      </tr>
     
      <th><p><a href="./paginas/" style="text-decoration:none; color: black">Voltar</a></p></th>
     
    </table>
    </div>