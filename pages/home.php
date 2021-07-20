	<?php 
		$usuariosOnline = Painel::listarUsuariosOnline();

	 ?>


	<section class="banner-container">
		<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/Gift1.jpg');" class="banner-single"></div><!--Banner-Single-->
		<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/Gift2.jpg');" class="banner-single"></div><!--Banner-Single-->
		<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/Gift3.jpg');" class="banner-single"></div><!--Banner-Single-->
		<div style="background-image: url('<?php echo INCLUDE_PATH; ?>imagens/Gift4.jpg');" class="banner-single"></div><!--Banner-Single-->
		<div class="overlay"></div><!--Overlay-->
		<div class="center">

			<form method="post">
				<h2>Qual o seu melhor email ?</h2>
				<input type="email" name="email" required />
				<input type="hidden" name="identificador" value="form_home" />
				<input type="submit" name="acao" value="Cadastrar" />
			</form>
		</div><!--center-->
		<div class="bullets"></div><!--Bullets-->
	</section><!--banner principal-->

	<section id="Sobre" class="Descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Descrição do Autor</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam suscipit imperdiet neque, mollis accumsan sapien vulputate non. Sed eget gravida felis, non ullamcorper ante. Cras non viverra elit, at tristique tortor. Vivamus vel velit sed lacus convallis condimentum. Donec a ligula sed odio sagittis suscipit et eget orci. Sed feugiat diam congue, cursus sem sit amet, tincidunt libero. Aenean dictum vestibulum purus, a commodo velit congue id. </p>

				<p>Sed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis. Curabitur dapibus, magna pulvinar cursus semper, nibh erat tempus lorem, pellentesque rutrum leo nunc eget est. Quisque quis molestie ex. Praesent condimentum, libero ut congue tristique, ante urna tincidunt augue, ultrices vehicula arcu dui at ante. Suspendisse nec dui et nulla euismod mollis ac in purus. Nulla facilisi. Aliquam vestibulum nunc magna, nec mattis augue mollis nec. </p>
			</div><!--w50-->
			<div class="w33 right">
				<img src="<?php echo INCLUDE_PATH; ?>imagens/foto.jpg">
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->

	</section><!--Descrição do autor-->

	<section class="Especialidades">
		<div id="Habilidades" class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-css3-alt"></i></h3>
				<h4>CSS3</h4>
				<p>ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis. Curabitur dapibus, magna pulvinar cursus semper, nibh erat tempus lorem, pellentesque rutrum leo nunc eget est.</p>
			</div><!--especialidades do autor-->
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis. Curabitur dapibus, magna pulvinar cursus semper, nibh erat tempus lorem, pellentesque rutrum leo nunc eget est.</p>
			</div><!--especialidades do autor-->
			<div class="w33 left box-especialidades">
				<h3><i class="fab fa-js"></i></h3>
				<h4>JavaScript</h4>
				<p>ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis. Curabitur dapibus, magna pulvinar cursus semper, nibh erat tempus lorem, pellentesque rutrum leo nunc eget est. Quisque quis molestie ex.</p>
			</div><!--especialidades do autor-->
			<div class="clear"></div>	
		</div><!--center-->
	</section><!--Especialidades do autor-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimento-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimentos-single">
					<p class="depoimento-descricao">
						"ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis."
					</p>
					<p class="nome-autor">ellentesque venenati</p>
				</div>

				<div class="depoimentos-single">
					<p class="depoimento-descricao">
						"ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis."
					</p>
					<p class="nome-autor">ellentesque venenati</p>
				</div> 

				<div class="depoimentos-single">
					<p class="depoimento-descricao">
						"ed vel ex magna. Pellentesque venenatis mi id justo blandit tincidunt. Cras lorem enim, ultricies non porta sit amet, vestibulum ac turpis."
					</p>
					<p class="nome-autor">ellentesque venenati</p>
				</div>
			</div><!--w50-->
			<div id="Servicos" class="w50 right servicos-container">
				<h2 class="title">Serviços</h2>
				<ul class="servicos">
					<li>Quisque quis molestie ex. Praesent condimentum, libero ut congue tristique, ante urna tincidunt augue, ultrices vehicula arcu dui at ante. Suspendisse nec dui et nulla euismod mollis ac in purus.</li>
					<li>Quisque quis molestie ex. Praesent condimentum, libero ut congue tristique, ante urna tincidunt augue, ultrices vehicula arcu dui at ante. Suspendisse nec dui et nulla euismod mollis ac in purus.</li>
					<li>Quisque quis molestie ex. Praesent condimentum, libero ut congue tristique, ante urna tincidunt augue, ultrices vehicula arcu dui at ante. Suspendisse nec dui et nulla euismod mollis ac in purus.</li>
					<li>Quisque quis molestie ex. Praesent condimentum, libero ut congue tristique, ante urna tincidunt augue, ultrices vehicula arcu dui at ante. Suspendisse nec dui et nulla euismod mollis ac in purus.</li>
				</ul><!--Serviços-->
			</div><!--w50-->	
			<div class="clear"></div>			
		</div><!--center-->	
	</section><!--informações extras-->
