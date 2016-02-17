<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Tchat</title>
	<link rel="stylesheet" href="../../css/chat.css" />
</head>
<body>
<div class="carre">
		<?php
		$dtb = mysqli_connect('localhost', 'bayle_n', 'nono', 'data_base', 2222);
		$select = mysqli_query($dtb, 'SELECT Prenom, Message FROM data_base.tchat');
		while ($donnee = mysqli_fetch_array($select))
			{
				echo $_SESSION['firstname'] . " : " . $donnee['Message'] . "<br>";		
			}
		?>
</div>
<center>
	 <form class="chat" action="tchat.php" method="post">
		<!-- <input type="text" name="name" placeholder="Name" required>  // Supprimer pour un $_SESSION-->
		<input type="text" name="msg" placeholder="Message" required>
		<input type="submit" name="send" value="Go!">
	</form>
</center>	
	</body>
	<?php/*

		require "../includes/connectdb.php";
		unset($dtb);
		$dtb = mysqli_connect('localhost', 'bayle_n', 'nono', 'data_base', 2222);
		if ($dtb === false) {
		    echo "error " . mysqli_connect_errno();
		} 
		else {
			$name = $_SESSION['firstname'];
			$msg = $_POST['msg'];
			$query = "INSERT INTO data_base.tchat(Prenom, Message) VALUES ('" . $name ."','". $msg."');";
			$test = mysqli_query($dtb, $query);
		}
		header("location: chat.php");*/
	?>
</html>