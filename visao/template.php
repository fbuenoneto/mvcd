<html>
    <head>
        <title>Donuts Café</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
            
        <!--<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">-->
        <link rel="stylesheet" href="./publico/css/inicial.css" style="text-decoration:none">
    </head>
    <body class="container">

   <div class="topo">
      
       <a href ="./paginas" style="text-decoration:none; color: inherit" class="btn btn-secondary"><h1> Donuts Café </h1></a>
      
      <a href="./carrinhoCompra/exibirCarrinho" style="text-decoration:none; color: inherit" class="btn btn-secondary"> <img id="icone"  src="./publico/imagens/carrinhon.png"></a>
      <a href="./usuario/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary"><img src="./publico/imagens/usuario1.png"></a>
      
      <form action="produtos/buscar" method="POST" class="buscas">
        <input type="search" class="search-input" name="buscar">
        <button type="submit">
          <img id="lupa" src="puclico/upload/pesquisar24.png">
        </button>  
      </form>
      
      <div id="botão">
          <a href="./paginas/admin" style="text-decoration:none; color: inherit" class="btn btn-secondary"><p>Administrador</p></a>
      </div>
    </div>
    <div id="corpo">
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
    </div>
        
    </body>
</html>
