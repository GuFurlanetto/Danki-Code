<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); 
	  Site::contador();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto-01</title>
	<link href="<?php echo INCLUDE_PATH ?>estilo/all.css" rel="stylesheet"> <!--load all styles -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.1">
	<meta name="keywords" content="Palavras-chaves,do,meu,site">
	<meta name="description" content="Descrição do meu site">
	<meta charset="utf-8">
</head>
<body>


<base base = "<?php echo INCLUDE_PATH; ?>" />
	
		<?php
			$url = isset($_GET['url']) ? $_GET['url'] : 'home';
			switch ($url) {
				case 'Sobre':
					echo '<target target="Sobre" />';
					break;
				case 'Servicos':
					echo '<target target="Servicos" />';
					break;
				case 'Habilidades':
					echo "<target target='Habilidades' />";
					break;
			}
		?>

	<div class="sucesso">Formulário enviado com sucesso !!</div>
	<div class="erro">Ocorreu um erro no envio do formulário !!</div>

	<div class="overlay-loading">
		<img src="<?php INCLUDE_PATH; ?>imagens/ajax-loader.gif">
	</div><!-- overlay-loading -->

	<header>
		<div class="center">
			<div class="logo left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Habilidades">Habilidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Servicos">Serviços</a></li>
					<li><a  href="<?php echo INCLUDE_PATH ?>Contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Habilidades">Hanilidades</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH ?>Contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>
<div class="container-principal">
	<?php 

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			if ($url != 'Sobre' && $url != 'Servicos' && $url != 'Habilidades') {
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
			
		} 
	?>
</div><!--Cnntainer principal-->

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class = "fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/JQuery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/scripts.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/slider.js"></script>
	<?php
		if($url == 'Contato'){
	?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyD-paHA3TdyaAJRGoC1eehHDvuygO0DQ8M"></script>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/map.js"></script>
	<?php } ?>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/Efeito.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>JQuery/Formularios.js"></script>
</body>
</html>


