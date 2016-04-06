<?php  
	if (isset($_REQUEST['enviar'])){
		require_once "../mail/mail.php";
		$destino = $_REQUEST['destino'];
		$titulo = $_REQUEST['title'];
		$texto = $_REQUEST['msj'];
		$mail->setFrom("miguel.ord94@gmail.com",'Miguel Ordonez');
		$mail->addReplyTo("miguel.ord94@gmail.com",'Miguel Ordonez');
		$mail->addAddress($destino);
		$mail->Subject=$titulo;
		$mail->Body=$texto;
		if(!$mail->send()){
			echo "Mail Error:".$mail->ErrorInfo;
		}else{
			echo "Message sent!";
		}
	}

?>