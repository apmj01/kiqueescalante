<?php 
	include 'phpmailer/PHPMailerAutoload.php';
	include 'user.php';
	$user = new User();
	$mail = new PHPMailer;
	$mail -> isSMTP();
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Username=$user->getName();
	$mail->Password=$user->getPass();
?>