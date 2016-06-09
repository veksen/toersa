<?php
	
	require_once("vendor/autoload.php");

	$companyName = htmlspecialchars($_POST['companyName']);
	$evenType 	 = htmlspecialchars($_POST['evenType']);
	$demographic = htmlspecialchars($_POST['demographic']);
	$date 		 = htmlspecialchars($_POST['date']);
	$email 		 = htmlspecialchars($_POST['email']);
	$note 	 	 = htmlspecialchars($_POST['note']);

	if(!empty($companyName) && !empty($evenType) && !empty($demographic) && !empty($date)  && !empty($email))
	{
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = "relay-hosting.secureserver.net:25";
		$mail->SMTPAuth    = false;
		$mail->setFrom($email);

		/* Configure the address the email will be sent to */
		$mail->addAddress('private@toersa.com', 'Private Investigation');
		$mail->Subject = 'Quote for Private Investigaton';
		 /* This is forwarded through a GoDaddy forwarding account */

		$message = "Company Name: " . $companyName ."\nEvent Type: " . $evenType . "\nClient Demographic: ". $demographic . "\nDate: " . $date . "\nNote: " . $note; 

		$mail->Body    = $message;

		if (!$mail->send()) {
            echo "Oops! Something went wrong and we couldn't send your message.";
		} else {
            echo "Thank You! Your message has been sent.";
		}			
	}

?>