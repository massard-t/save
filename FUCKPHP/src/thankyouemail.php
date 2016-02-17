<?php
	include "../core/head.php";
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
		if(isset($_POST['submit'])){
		    $to = "pointu_l@etna-alternance.net"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $first_name = $_POST['firstname'];
		    $last_name = $_POST['lastname'];
		    $subject = "Form submission";
		    $subject2 = "Copy of your form submission";
		    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['content'];
		    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['content'];

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    echo "<div class=\"core\">
					<div class=\"text\">
					<center>
					<h2>
						Thank you for sending us an email, ".$first_name." !
					</h2>
					</center>
						<a href=\"../index.php\" class=\"quick_action_a\">Go back to the home page!</a>
				</div><br />";
		  }
	?>
<?php
	include "../core/footer.php";
?>