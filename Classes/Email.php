<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


	class Email
	{


		private $mailer;
		
		public function __construct($host, $username, $senha, $name)
		{
			//Instantiation and passing `true` enables exceptions
			$this->mailer = new PHPMailer(true);

		
			$this->mailer->isSMTP();                                            //Send using SMTP
		    $this->mailer->Host       = $host;                       //Set the SMTP server to send through
		    $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $this->mailer->Username   = $username;    			//SMTP username
		    $this->mailer->Password   = $senha;                          //SMTP password
		    $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption;
		    $this->mailer->Port       = 587;                                    //TCP port to connect to, use 465

		    $this->mailer->setFrom($username, $name);
			    
		    $this->mailer->isHTML(true);  
		    $this->mailer->CharSet = 'UTF-8';
		}



		public function addAdress($email, $nome){
			$this->mailer->addAddress($email, $nome);     //Add a recipient 
		}

		public function formatarEmail($info){
			//Content
		 //Set email format to HTML
			$this->mailer->Subject = $info['assunto'];
			$this->mailer->Body    = $info['corpo'];
		    $this->mailer->AltBody = strip_tags($info['corpo']);
		}

		public function enviarEmail (){
			if ($this->mailer->send()){
				return true;
			}else{
				return false;
			}
		}

	}

?>