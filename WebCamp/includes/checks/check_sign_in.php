<?php
$dtb = mysqli_connect("localhost", "db_bonanza", "db_bonanza", "data_base");
if ($dtb === false) {
    echo "error " . mysqli_connect_errno();
    echo mysqli_errno($dtb) . ": " . mysqli_error($dtb). "\n";
}

$query 	= "SELECT * Users WHERE mail = '".$_POST['email']."';";
$result = mysqli_query($dtb, $query);

if (mysqli_num_rows($result) >= 1) {
	echo "Un utilisateur avec cette adresse email est dejà enregistré";
	sleep(1);
	header('Location: ../../index.php?mail=false');
} else {
	include 'check_email.php';
	include 'check_birthday.php';
	include 'check_street.php';
	if (check_email($_POST['email']) == TRUE) {
		$date 			= check_date($_POST['birthday']);
		$hash 			= md5(rand(0,1000));
		$sql 			= "INSERT INTO Users(firstname, lastname, dob, password, mail, address, role, confirmation, hash) VALUES('".$_POST['firstname']."', '".$_POST['lastname']."', '".$date."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['address']."', 1, 0, '".$hash."') ;";
		$result 		= mysqli_query($dtb, $sql);
		$to      		= $_POST['email']; // Send email to our user
		$subject 		= 'Signup | Verification'; // Give the email a subject 
		$message 		= '
		Hello,  '.$_POST['firstname'].' '.$_POST['lastname'].' 
		
		Thank you for joining us on Bonanza!
		Your account has been created, you can login with the following credentials after you have activated your account by clicking the link below.
		

		-------------------------------------
		| Username: '.$_POST['email'].'
		| Password: '.$_POST['password'].'
		-------------------------------------
		

		Please click this link to activate your account:
		http://192.168.114.25/src/validation.php?email='.$_POST['email'].'&hash='.$hash.'
		 
		
		'; // Our message above including the link
		$headers 		= 'From:noreply.bonanza@gmail.com' . "\r\n"; // Set from headers
		mail($to, $subject, $message, $headers); // Send our email
		} else {
		header('Location: ../../index.php?mdp=false');
	} 
}
header('Location: ../../index.php');			
?>