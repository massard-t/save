<?php
	include "../core/head.php";
	if(!isset($_SESSION['ID'])) {
	header("Location: ../index.php");
}
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>

	<div class="core">
		<div class="text">
			<center>
				<h2>
					Contact us
				</h2>
				<hr>
			</center>
			<p>
				If you happen to encounter a problem with a product, or simply if you'd like to send us a feedback, you can do so either by sending us an email at contact@shinra-corp.com with the [SegfaultCorp] tag in the object field, or by directly contacting us by the contact section below.<br /><br />
				Feel free to send us your ideas about the improvements we can make on the website.
			</p>
		</div>
		<br />
		<div class="contact">
			<form action="thankyouemail.php" method="post">
				(*) : required fields<br /><br />
				First name:<br />
				<input type="text" name="firstname" placeholder="firstname"><br />
				Last name(*):<br />
				<input type="text" name="lastname" placeholder="lastname"required><br />
				Email address(*):<br />
				<input type="text" name="email" placeholder="your@email.com" required><br />
				Subject:<br />
				<input type="text" name="subject" placeholder="[SegFault]subject"><br />
				Comment(*):<br />
				<TEXTAREA type="text" name="content" rows="20" cols="80" placeholder="Your text here." required></TEXTAREA><br />
				<input type="submit" value="Send" name="submit">
				<input type="reset" value="clear"><br />
			</form>
		</div>
	<?php
		include "../core/footer.php";
	?>
