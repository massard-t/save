<?php
	include "../core/head.php";
	if(!isset($_SESSION['ID'])) {
	header("Location: login.php");
}
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
				<h2>Your successfully logged out!</h2>
				<p>You can go back to the index by clicking below.</p>
				<form action="index_logout.php" method="post">
					<input type="submit" name="index_logout" value="Index">
				</form>
			</center>
		</div>
		<div style="clear: both"></div>
<?php
	include "../core/footer.php";
	session_destroy();
	header("Location: ../index.php");
?>