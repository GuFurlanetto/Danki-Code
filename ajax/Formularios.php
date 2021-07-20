<?php 
	include('../config.php');
	$data = array();
	$assunto = 'Nova mensagem do site';
	$corpo = '';

	foreach ($_POST as $key => $value) {
		$corpo .= ucfirst($key).": ".$value;
		$corpo .= "<hr>";
	}

	$info = array("assunto"=>$assunto, "corpo"=>$corpo);
	$mail = new Email('smtp.gmail.com', 'xxgustavojrxx@gmail.com', 'osvaldo123+', 'Gustavo');
	$mail->addAdress('gustavo.furlanetto@unesp.br', 'UNESP');
	$mail->formatarEmail($info);
	if ($mail->enviarEmail()){
		$data['sucesso'] = false;
	}else{
		$data['erro'] = true;
	}
	die(json_encode($data)); 
 ?>