<?php
	include "../core/head.php";
	if(!isset($_SESSION['ID'])) {
	header("Location: login.php");
}
?>
<body>
	<script src="../js/jquery.js">
	</script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>

<?php
	include "../core/menu.php";
?>
		<div class="core">
			<div class="main" style="margin-left: 0px;">
				<?php
					if (isset($_POST['send'])) {
						$query = 'SELECT * FROM Conversations WHERE ID_user = "'.$user.'"';
						$result = mysqli_query($bdd, $query);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								$conv_id = $row['ID'];
							}
						} else {
							$query = 'INSERT INTO Conversations (ID_user, Sujet, Mail) VALUES ("'.$user.'", "'.$_POST['sujet'].'", "'.$_POST['email'].'")';
							mysqli_query($bdd, $query);
							$query = 'SELECT * FROM Conversations WHERE ID_user = "'.$user.'"';
							$result = mysqli_query($bdd, $query);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$conv_id = $row['ID'];
								}
							}
						}
						$query = 'INSERT INTO Tickets (ID_user, ID_conversation, Message) VALUES ("'.$user.'", "'.$conv_id.'", "'.$_POST['ticket'].'")';
						$result = mysqli_query($bdd, $query);
					}
					if (!isset($_GET['conv'])) {
						$query = 'SELECT * FROM Conversations WHERE ID_user = "'.$user.'"';
						if ($_SESSION['role'] == 1) {
							$query = 'SELECT * FROM Conversations';	
						}
						$result = mysqli_query($bdd, $query);
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<h4><a href='ticketing.php?conv=".$row['ID']."' style='padding-left: 75px'>".$row['Sujet']."</a></h4><hr /><br />";
							}
						}
					} else {
						$query = 'SELECT * FROM Conversations WHERE ID_user = "'.$user.'"';
						if ($_SESSION['role'] == 1) {
							$query = 'SELECT * FROM Conversations WHERE ID_conversation = "'.$_GET['conv'].'"';	
						}				
						
						$result = mysqli_query($bdd, $query);
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<h2> <center>".$row['Sujet']."</center> </h2> <hr /><br /><br />";
							$id_conv = $row['ID'];
						}
						if ($_SESSION['role'] == 1) {
							$query = 'SELECT * FROM Tickets WHERE ID_conversation = '.$_GET['conv'].'';	
						} else {
							$query = 'SELECT * FROM Tickets WHERE ID_user = "'.$user.'" AND ID_conversation = '.$_GET['conv'].'';
						}
						$result = mysqli_query($bdd, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<div class=\"popular_product\" style='margin: 15px; padding: 5px;'>";
								$query = 'SELECT * FROM Utilisateurs WHERE ID = "'.$row['ID_user'].'"';
								$result_integrate = mysqli_query($bdd, $query);
									while ($row_integrate = mysqli_fetch_assoc($result_integrate)) {
										echo "<span style='float: right'><small style='float: right'>".$row_integrate['Prenom']." ".$row_integrate['Nom']."</small></span><br />";
										$id_user = $row_integrate['ID'];
									}
								echo "<small style='float: right'>".$row['ID']."</small><br />";
								echo "<br />";
								echo "<h4>&nbsp;".$row['Message']."</h4>";
								echo "<br /><br /> <b>State : </b>";
								if ($row['State'] == 1) {
									echo "never read.<br /></div>";
								} else if ($row['State'] == 0) {
									echo "already read.<br /></div>";
								}
								$query2 = 'UPDATE Tickets SET State = 0 WHERE ID = "'.$row['ID'].'"';
								mysqli_query($bdd, $query2);
							}
						}
					}
					if (isset($_GET['add'])) {
								?>
									<form cible="ticketing.php/" method="post">
										<center><input type="text" name="sujet" placeholder="Your subject name"></input></center>		
										<textarea id="comment_textbox" type="text" name="ticket" value="Your comment here" style="width: 97.1%; margin: 0 auto; min-height: 200px; font-family: arial"></textarea>
										
										<center><input type="text" name="email" placeholder="Your mail adress "></input></center>
										
										<center><input id="comment_validate" type="submit" name="send" value="Send !"></center><br />
									</form>
								<?php
									}
								if (!isset($_GET['conv'])) { 
									echo "<a style=\"margin: 0 auto; float:right\" class=\"quick_action\" href=\"ticketing.php?add\">Open a new ticket</a>";
								} else {
									if (isset($_POST['send_reply'])) {
										$query = 'INSERT INTO Tickets (ID_user, ID_conversation, Message) VALUES ("'.$_SESSION['ID'].'", "'.$_GET['conv'].'", "'.$_POST['ticket'].'")';
										mysqli_query($bdd, $query);
										}
								?>
							<form cible="ticketing.php?<?php echo ($_GET['conv']); ?>" method="post">		
							<textarea id="comment_textbox" type="text" name="ticket" value="Your comment here" style="width: 97.1%; margin: 0 auto; min-height: 200px; font-family: arial"></textarea>
							<center><input id="comment_validate" type="submit" name="send_reply" value="Send !"></center><br />
							</form>
						<a class="quick_action right" href="ticketing.php">Back to conversations list</a>
						<?php
						}
						?>
					</div>
				</div>
<?php
	include "../core/footer.php";
?>