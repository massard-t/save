<?php
	if(!session_id())
	{
    	session_start();
	}
	$bdd = mysqli_connect('localhost', 'bob', '224499', 'segfault_massar_t');
	echo '
	<head>
	<title> SEGFAULT CORP </title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	</head> ';
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
				<h2>Log in !</h2>
				<form action="../includes/auth.php" method="post">
					<table>
						<tr>
							<td><label for"login" style="color: white" >Email: </label></td><td><input type="text" name="login" placeholder="email" pattern="[\w]*[.-]?[\w]+@[\w]*[-]?[\w]+.[\w]*[-]?[\w]+" required></td>
						</tr>		
						<tr>
							<td><label for"password" style="color: white" >Password: </label></td><td><input type="password" name="password" placeholder="password" pattern=".{6,}" required></td>
						</tr>
					</table>
					<input type="submit" name="log" value="Log in!"><a href="sign_in.php"><input type="button" value="Sign in"></a><br />
				</form>
			</center>
		</div>
<?php
	include "../core/footer.php";
?>