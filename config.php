<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	session_start();
	date_default_timezone_set('America/Sao_Paulo');
	$autoload = function($class){
		if ($class == 'Email')
			require_once('Classes/vendor/autoload.php');
		include('Classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);


	define('INCLUDE_PATH', 'http://localhost/Projeto-01/');
	define('INCLUDE_PATH_PAINEL', 'http://localhost/Projeto-01/painel/');
	
	//Conectar com o banco de dados
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','Projeto_01');

	define('NOME_EMPRESA','MAGUS');

	//Funções
	function pegaCargo($cargo){
		$arr = [
			'0' => 'Normal',
			'1' => 'Sub Administrador',
			'2' => 'Administrador',
		];

		return $arr[$cargo];

	}

?>