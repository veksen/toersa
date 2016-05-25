<?php
	
	require_once("vendor/autoload.php");

	$mail = new PHPMailer();

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['massage'];

	$error = NULL;

	if(empty($name) || empty($email) || empty($message))
	{
		$error = "Please fill the required field";
	}

	echo $error;

	/*

	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPDebug = 3;

	$mail->Host = 'smtpout.secureserver.net';
	$mail->Username = 'pbeaulne@toersa.com';
	$mail->Password = 'pascal15';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;


	$mail->From = 'pascal.beaulne@gmail.com';
	$mail->FromName = 'Pascal Beaulne';
	$mail->addReplyTo('pbeaulne@toersa.com', 'Reply Address');
	$mail->addAddress('pascal.beaulne@gmail.com', 'Pascal Beaulne');

	$mail->Subject = 'Get a Quote';
	$mail->Body = 'Test for Get a Quote';
	$mail->AltBody = 'Test for Get a Quote';

	//var_dump($mail);

	if(!$mail->send()){
		echo $mail->ErrorInfo;

	}
	else
	{
		echo 'Email is sent';
	}*/

?>