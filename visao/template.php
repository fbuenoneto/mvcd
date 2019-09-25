<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/inicial.css" style="text-decoration:none">
    </head>
    <body class="container">

   <div class="topo">
      
       <a href ="./paginas" style="text-decoration:none; color: inherit" class="btn btn-secondary"><h1> Donuts Café </h1></a>
      
      <a href="./carrinhoCompra/exibirCarrinho" style="text-decoration:none; color: inherit" class="btn btn-secondary"> <img id="icone"  src="./publico/imagens/carrinhon.png"></a>
      <a href="./usuario/adicionar" style="text-decoration:none; color: inherit" class="btn btn-secondary"><img src="./publico/imagens/usuario1.png"></a>
      
      
      
      <div id="botão">
        <a href="index-3.html" style="text-decoration:none; color: inherit" class="btn btn-secondary"><p>Administrador</p></a>
      </div>
    </div>
    <div id="corpo">
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
    </div>
        
    </body>
</html>
