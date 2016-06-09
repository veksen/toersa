<?php
	
	require_once("vendor/autoload.php");

	$companyName = htmlspecialchars($_POST['companyName']);
	$evenType 	 = htmlspecialchars($_POST['evenType']);
	$principles  = htmlspecialchars($_POST['principles']);
	$hours 		 = htmlspecialchars($_POST['hours']);
	$demographic = htmlspecialchars($_POST['demographic']);
	$date 		 = htmlspecialchars($_POST['date']);
	$email 		 = htmlspecialchars($_POST['email']);
	$note 	 	 = htmlspecialchars($_POST['note']);

	if(!empty($companyName) && !empty($evenType) && !empty($principles) && !empty($hours) && !empty($demographic) && !empty($date) && !empty($email))
	{
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = "relay-hosting.secureserver.net:25";
		$mail->SMTPAuth    = false;
		$mail->setFrom($email);

		/* Configure the address the email will be sent to */
		$mail->addAddress('protection@toersa.com', 'Close Protection');
		$mail->Subject = 'Quote for Close Protection';
		 /* This is forwarded through a GoDaddy forwarding account */

		$message = "Company/Client Name: " . $companyName . "\nType of Service: " . $evenType . "\n Number of Principles: " . $principles .
		 		   "\nLenght of Service: " . $hours . "\nClient Demographic: ". $demographic . "\nDate: " . $date . "\nNote: " . $note; 

		$mail->Body    = $message;

		if (!$mail->send()) {
            echo "Oops! Something went wrong and we couldn't send your message.";
		} else {
            echo "Thank You! Your message has been sent.";
		}			
	}

?>
