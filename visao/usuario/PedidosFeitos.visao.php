
<h2 style="color: orange; margin-top: 5%;"> Seus Pedidos:</h2>
        <hr align="center" width="100%" size="1" color="orange">
  
            <div class="caixinha">
               
            
                <table class="table">                    
                    <thead>
                        <tr>
                            <th> Data da compra </th>
                            <th>  Total  </th>
                        </tr>
                    </thead>
                    <?php foreach ($pedidos as $pedido):?>
                    
                    <tr>
                        <td><?= $pedido["datacompra"]?></td>
                        <td><?= $pedido["Preco"]?></td>                       
                        <td><a href="./Pedido/deletar/<?=$pedido["idpedido"]?>" style="text-decoration:none; color: black"> Deletar </a></td>
                       
                    </tr>

                    <?php endforeach;?>
                </table>
      
            </div>
         <hr align="center" width="100%" size="1" color="orange">
         <h4 style="color: orange; margin-top: 5%; font-weight:bolder; text-align: center"> Agradecemos a preferência S2</h4>
       
