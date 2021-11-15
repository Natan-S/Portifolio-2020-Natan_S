<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

	if( isset($_POST['tMail'] ) && isset($_POST['tMensagem'])   )  {

		$nome = isset($_POST['tNome']) ? $_POST['tNome'] : 'Não Informado';
		$email = $_POST['tMail'];
		$assunto = isset($_POST['tAssunto']) ? $_POST['tAssunto'] : 'Não Informado';
		$mensagem = isset($_POST['tMensagem']) ? $_POST['tMensagem'] : 'Não Informado'; 
		$data = date('d/m/y H:i:s');

		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'natansouzacontato@gmail.com';
		$mail->Password = 'abc123';
		$mail->Port = 587;
 
		$mail->setFrom('natansouzacontato@gmail.com');
		$mail->addAddress('natansouzacontato@gmail.com');
 
		$mail->isHTML(true);
		$mail->Subject = $assunto;
		$mail->Body = "Nome: {$nome}<br>
				   	   Email: {$email}<br>
				       Mensagem: {$mensagem}<br>
				       Data/Hora: {$data}";
		try {
			$mail->send();
			echo 'Email enviado com sucesso';
		} catch (\Throwable $th) {
			var_dump($th);
		}
	} else {
		var_dump($_POST);
	}


