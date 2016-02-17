<?php
	include "../includes/connectdb.php";

	$query = "SELECT * FROM Users WHERE ID = '". $_SESSION['ID'] ."';";
	$result = mysqli_query($dtb, $query);
		if (isset($_GET['message'])) {
			$t->assign('message', 'true');
		}
		while ($row = mysqli_fetch_assoc($result)) {
			if ($row['role'] == 0) {

				$query = "SELECT * FROM Users WHERE role = 1;";
				$result2 = mysqli_query($dtb, $query);
				while ($row2 = mysqli_fetch_assoc($result2)) {
					$a[$row2['ID']] = $row2['firstname']." ".$row2['lastname']."";
				}

			} else {
				header('Location: ../index.php?error=no_admin');
			}
		}
				$t->assign('user_list', $a);
				$t->draw('employer');
?>