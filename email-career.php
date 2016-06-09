<?php
	
	require_once("vendor/autoload.php");


	$name 	 	 	= htmlspecialchars($_POST['name']);
	$email 		 	= htmlspecialchars($_POST['email']);
	$phone		 	= htmlspecialchars($_POST['phone']);
	$currentCompany = htmlspecialchars($_POST['currentCompany']);
	$note 	 	 	= htmlspecialchars($_POST['note']);

	if(!empty($name) && !empty($email) && !empty($phone) && !empty($currentCompany))
	{
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = "relay-hosting.secureserver.net:25";
		$mail->SMTPAuth    = false;
		$mail->setFrom($email);

		/* Configure the address the email will be sent to */
		$mail->addAddress('jobs@toersa.com', 'Jobs');
		$mail->Subject = 'Application for Employment';
		 /* This is forwarded through a GoDaddy forwarding account */

		$message = "Name: " . $Name ."\nPhone: " . $phone . "\nCurrent Company: ". $currentCompany . "\nNote: " . $note; 

		$mail->Body    = $message;

		if (!$mail->send()) {
            echo "Oops! Something went wrong and we couldn't send your message.";
		} else {
            echo "Thank You! Your message has been sent.";
		}			
	}

?>