<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/inicial.css">
    </head>
    <body class="container">

   <div class="topo">
      
       <a href ="./paginas"><h1> Donuts Café </h1></a>
      
      <a href="carrinho.html"> <img id="icone"  src="./publico/imagens/carrinhon.png"></a>
      <a href="usuario.html"><img src="./publico/imagens/usuario1.png"></a>
      
      <div id="botão">
        <a href="index-3.html"><p>Administrador</p></a>
      </div>
    </div>
        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

        Rodape
    </body>
</html>
