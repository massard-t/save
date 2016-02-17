<?php
require "../includes/connectdb.php";
?>
<html>
<head>
	<title>add_internship</title>
</head>
<body>

	<form method="post" action ="my_add_internship.php">
		<input type="text" placeholder = "Intitule" name = "name">
		<input type="text" placeholder="Lieux" name = "place">
		<input type="text" placeholder="Societé" name = "society">
		<input type="text" placeholder="Brieve description" name = "description">
	</form>
</body>
</html>