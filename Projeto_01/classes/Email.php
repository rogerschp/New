<?php

	class Email
	{
		
	/*	private $mailer;

		public function __construct($host,$username,$senha,$name){

			$this->mailer = new PHPMailer;

			$this->mailer->isSMTP();                                      	 // Set mailer to use SMTP
			$this->mailer->Host = $host;  									// Specify main and backup SMTP servers, so pedir pro servidor de hospedagem
			$this->mailer->SMTPAuth = true;                                // Enable SMTP authentication
			$this->mailer->Username = $username;                 		  // SMTP username, Username do email que criou
			$this->mailer->Password = $senha;                            // SMTP password, Password do email que criou
			$this->mailer->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted (varia de hospedagem pode ser ssl)
			$this->mailer->Port = 465;                                 // TCP port to connect to (difere de cada servidor, perguntar para a empresa de hospedagem)

			$this->mailer->setFrom($username,$name);		  		 // Mesmo email do username
			$this->mailer->isHTML(true);                            // Set email format to HTML|| permite codigo html no email
			$this->mailer->CharSet = 'UTF-8';

			}

			public function addAddress($email,$nome){
				$this->mailer->addAddress($email,$nome);
			}

			public function formatarEmail($info){

				$this->mailer->Subject = $info['assunto'];
				$this->mailer->Body    = $info['corpo'];
				$this->mailer->AltBody = strip_tags($info['corpo']);
			}

			public function enviarEmail(){
				if($this->mailer->send()){
					return true;
				}else{
					return false;
				}
			}*/
		}
?>