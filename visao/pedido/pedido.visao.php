<form action="" method="POST">
    <p>Forma de pagamento: 
        <select name="formaP">
		<option value="default">Selecione uma forma de pagamento</option>
		
		<?php foreach ($formas as $pagamento):?>
                    <option value="<?=$pagamento["idForma"]?>"><?=$pagamento["descricao"]?></option>
		<?php endforeach;?>
	</select>
    <p>Endereço: <input type="text" name="endereco" ></p>
    <p>Cupom: <input type="text" name="cupom" ></p>
    <p>Preço: R$<?=@$total?>
</p>

 <button type="submit">Enviar</button>
</form>
