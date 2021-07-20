<div id="map"></div>
<div class="contato-container">
	<div class="center">
		<form method="post" action="<?php echo INCLUDE_PATH; ?>home">
			<input required type="text" name="Nome" placeholder="Nome..">
			<div></div>
			<input required type="text" name="E-mail" placeholder="E-mail..">
			<div></div>
			<input required type="text" name="Telefone" placeholder="Telefone..">
			<div></div>
			<textarea required name="Mensagem" placeholder="Sua Mensagem.."></textarea>
			<div></div>
			<input type="submit" name="acao" value="Enviar">
			<input type="hidden" name="identificador" value="form_contato" />
		</form>
	</div><!--Center-->
</div><!--Contato-conatiner-->