<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 <html>
<head>
    <title>Validation</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <?php
    	$dtb = mysqli_connect("localhost", "db_bonanza", "db_bonanza", "data_base");
    	if (isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])) {
    		$query = "SELECT mail, hash, confirmation FROM Users WHERE mail='".$_GET['email']."' AND hash='".$_GET['hash']."' AND confirmation='0'";
    		$search = mysqli_query($dtb, $query);
			$match  = mysqli_num_rows($search);
			if ($match == 1) {
			$query = "UPDATE Users SET confirmation=1 WHERE mail='".$_GET['email']."' AND hash='".$_GET['hash']."' AND confirmation=0";
			mysqli_query($dtb, $query);
			echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
			sleep(2);
			header("Location: ../index.php");
			} else {
				echo "<script type='text/javascript'>alert('Invalid credentials.')</script>";
				sleep(2);
				header("Location: ../index.php");
			}
		} else {
			echo "Error, invalid credentials.";
			sleep(2);
			header("Location: ../index.php");
		}
    ?>
    </div>
</body>
</html>
