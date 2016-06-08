<?php
	
	require_once("vendor/autoload.php");


	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['note']);

	if(!empty($name) && !empty($email) && !empty($message))
	{
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = "relay-hosting.secureserver.net:25";
		$mail->SMTPAuth    = false;
		$mail->setFrom($email, $name);

		/* Configure the address the email will be sent to */
		$mail->addAddress('pbeaulne@toersa.com', 'Pascal Beaulne');
		$mail->Subject = 'Information Request';
		 /* This is forwarded through a GoDaddy forwarding account */

		$mail->Body    = $message;

		if (!$mail->send()) {
            echo "Oops! Something went wrong and we couldn't send your message.";
		} else {
            echo "Thank You! Your message has been sent.";
		}			
	}

?>