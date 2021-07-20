<?php 
	class Painel
	{
		public static function logado (){
			return isset($_SESSION['login']) ? true : false;
		}

		public static function loggout (){
			session_destroy();
			header('Location: '.INCLUDE_PATH_PAINEL);
		}

		public static function carregarPagina(){
			if (isset($_GET['url'])){
				$url = explode('/',$_GET['url']);
				if(file_exists('pages/'.$url[0].'.php')){
					include('pages/'.$url[0].'.php');
				}else{
					// Página não existe
					header('Location: '.INCLUDE_PATH_PAINEL);
				}

			}else{
				include('pages/home.php');
			}
		}

		public static function listarUsuariosOnline (){
			Painel::limparUsuariosOnline();
			$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.online`");
			$sql->execute();
			return $sql->fetchAll();
		}

		public static function limparUsuariosOnline(){
			$data = date('Y-m-d H:i:s');
			MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$data' - INTERVAL 1 MINUTE");
		}
	}

 ?>