<?php
echo "test";
function Send_Mail($to,$body)
{
	require '../includes/class.phpmailer.php';
	$from       = "noreply.bonanza@gmail.com";
	$mail       = new PHPMailer();
	$mail->IsSMTP(true);            // use SMTP
	$mail->IsHTML(true);
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Host       = "tls://smtp.gmail.com"; // SMTP host
	$mail->Port       =  465;                    // set the SMTP port
	$mail->Username   = "noreply.bonanza@gmail";  // SMTP  username
	$mail->Password   = "mot de passe bonanza";  // SMTP password
	$mail->SetFrom($from, 'noreply@bonanza');
	$mail->AddReplyTo($from,'do not answer');
	$mail->Subject    = "Your Bonanza email confirmation.";
	$mail->MsgHTML($body);
	$address = $to;
	$mail->AddAddress($address, $to);
	try{
		$mail->send();
	}
	catch (Exception $e){
		echo ErrorInfo;
		echo $e;
	}
}
Send_Mail("massar_t@etna-alternance.net", "Test test test test <br /> <center>test</center>");
?>