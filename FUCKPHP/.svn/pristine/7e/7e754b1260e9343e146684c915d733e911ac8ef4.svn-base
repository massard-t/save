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
		<div style="float: left">
			<h2>This is your client space</h2><hr>
			<table>
				<tr>
					<td><p>Your username is:<? echo $_SESSION['nom']; ?></p></td>
				</tr>
				<tr>
					<td><p>Change your password: </p><input type="button" name="password" value="Here"></td>
				</tr>
				<tr>
					<td><p>Your first name is: <? echo $_SESSION['prenom']; ?></p></td>
				</tr>
				<tr>
					<td><p>Your last name is: <? echo $_SESSION['nom']; ?></p></td>
				</tr>
				<tr>
					<td><p>Your email address is: jpmerguez@gmail.com</p></td>
				</tr>
				<tr>
					<td><p>Your current delivering address is in Ivry-sur-Seine, 94200, France (7, rue Maurice Grandcoing).</p></td>
				</tr>
			</table>
			<form action="logout.php" method="post">
				<input type="submit" name="logout" value="logout">
			</form>
		</div>
	<?php
		include "../core/footer.php";
	?>