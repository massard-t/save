<?php
	include "../core/head.php";
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
	?>
	<div class="core">
		<div class="contact">
			<center>
				<h2>Uh oh... Looks like you this part of the website isn't available right now.</h2>
				<p>We advise you to quickly get back to a safer part of this place!</p>
				<form action="../index.php" method="post">
					<input type="submit" name="index" value="Go back!" required>
				</form>
			</center>
<?php
	include "../core/footer.php";
?>