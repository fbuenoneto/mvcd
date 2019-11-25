<form action="" method="POST">
    <p>Forma de pagamento: 
        <select name="formaP">
		<option value="default">Selecione uma forma de pagamento</option>
		
		<?php foreach ($formas as $pagamento):?>
                    <option value="<?=$pagamento["idForma"]?>"><?=$pagamento["descricao"]?></option>
		<?php endforeach;?>
	</select>
    </p>
    
     <p> Endereço: 
        <select name="endereco">
		<option value="default">Selecione um Endereço</option>
		
		<?php foreach ($endereco as $end):?>
                    <option value="<?=$end["idendereco"]?>"><?=$end["logradouro"]?></option>
		<?php endforeach;?>
	</select>
     </p>
     
    <p>Cupom: <input type="text" name="cupom" ></p>
    <p>Preço: R$<?=@$total?>
</p>

 <button type="submit">Enviar</button>
</form>
