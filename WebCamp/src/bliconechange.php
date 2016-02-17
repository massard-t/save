<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Modification</title>
</head>
<body>
<center>
	 <form class="chat" action="icone_change.php" method="post" enctype="multipart/form-data">
     <label for="avatar">Icône (JPG, PNG ou GIF) :</label><br />
	<input type="file" name="avatar" id="avatar">
	<input type="submit" name="submit" value="Submit">
	</form>
	<div>
	</div>
</center>	
</body>
</html>