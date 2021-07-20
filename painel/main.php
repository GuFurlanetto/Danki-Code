<?php 
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel de Controle</title>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet"> 
	<link href="<?php echo INCLUDE_PATH ?>estilo/all.css" rel="stylesheet"> <!--load all styles -->
	<link rel="stylesheet" type="text/css" href="<?php INCLUDE_PATH_PAINEL; ?>CSS/style.css">
</head>
<body>
	<div class="menu">
		<div class="menu-wrapper">
			<div class="box-usuario">
				<?php if ($_SESSION['img'] == ''){ ?>
					<div class="avatar-usuario">
						 <i class="fa fa-user"></i>
					</div><!-- avatar-usuario -->
				<?php }else{ ?>
					<div class="imagem-usuario">
						 <img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['img']; ?>">
					</div><!-- avatar-usuario -->
				<?php } ?>
				<div class="nome-usuario">
					<p><?php echo $_SESSION['nome']; ?></p>
					<p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
				</div><!-- nome-usuario -->
			</div><!-- box-usuario -->
			<div class="itens-menu">
				<h2>Cadastro</h2>
				<a href="">Cadastrar Depoimento</a>
				<a href="">Cadastrar Seviço</a>
				<a href="">Cadastrar Slides</a>
				<h2>Gestão</h2>
				<a href="">Listar Depoimentos</a>
				<a href="">Lista Seviços</a>
				<a href="">Listar Slides</a>
				<h2>Administração do painel</h2>
				<a href="<?php INCLUDE_PATH_PAINEL; ?>editar_usuario">Editar Usuários</a>
				<a href="">Adicionar Usuários</a>
				<h2>Configuração Geral</h2>
				<a href="">Editar</a>
			</div><!-- itens-menu -->
		</div><!-- menu-wrapper -->
	</div><!-- menu -->

	<header>
		<div class="center">
			<div class="menu-btn">
				<i class="fa fa-bars"></i>			
			</div><!-- menu-btn -->
			<div class="loggout">
				<a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout"><i class="fa fa-home"></i><span>Página Inicial</span></a>
				<a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout"><i class="fa fa-window-close"></i><span> Sair</span></a>
			</div><!-- logout -->
			<div class="clear"></div>
		</div><!-- center -->
	</header>
	<div class="content">

		<?php Painel::carregarPagina(); ?>

	</div><!-- content -->

	<script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/JQuery.js"></script>
	<script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
</body>
</html>