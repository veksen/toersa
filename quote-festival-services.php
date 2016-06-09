<?php
	
	require_once("vendor/autoload.php");

	$companyName = htmlspecialchars($_POST['companyName']);
	$eventName 	 = htmlspecialchars($_POST['eventName']);
	$evenType 	 = htmlspecialchars($_POST['evenType']);
	$attendance  = htmlspecialchars($_POST['attendance']);
	$hours 		 = htmlspecialchars($_POST['hours']);
	$demographic = htmlspecialchars($_POST['demographic']);
	$date 		 = htmlspecialchars($_POST['date']);
	$alcohol 	 = htmlspecialchars($_POST['alcohol']);
	$email 		 = htmlspecialchars($_POST['email']);
	$note 	 	 = htmlspecialchars($_POST['note']);

	if(!empty($companyName) && !empty($eventName) && !empty($evenType) && !empty($attendance) && !empty($hours) && !empty($demographic) && !empty($date) && !empty($alcohol) && !empty($email))
	{
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = "relay-hosting.secureserver.net:25";
		$mail->SMTPAuth    = false;
		$mail->setFrom($email);

		/* Configure the address the email will be sent to */
		$mail->addAddress('info@toersa.com', 'Festival Services');
		$mail->Subject = 'Quote for Festival Services';
		 /* This is forwarded through a GoDaddy forwarding account */

		$message = "Company Name: " . $companyName . "\nEvent Name: " . $eventName . "\nEvent Type: " . $evenType . "\nExpected Attendance: " . $attendance .
		 		   "\nHours of Operation: " . $hours . "\nClient Demographic: ". $demographic . "\nDate: " . $date .
		 		   "\nWill there be alcohol: " . $alcohol . "\nNote: " . $note; 

		$mail->Body    = $message;

		if (!$mail->send()) {
            echo "Oops! Something went wrong and we couldn't send your message.";
		} else {
            echo "Thank You! Your message has been sent.";
		}			
	}

?>