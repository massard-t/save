<?php
	include "../includes/connectdb.php";

	if (isset($_GET['user_id'])) {
		$query = "SELECT * FROM Users WHERE ID = '". $_GET['user_id'] ."';";
		$result = mysqli_query($dtb, $query);
		if (mysqli_num_rows($result) != 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$tab['firstname'] = $row['firstname'];
				$tab['lastname'] = $row['lastname'];
				$tab['dob'] = $row['dob'];
				$tab['mail'] = $row['mail'];
				$tab['description'] = $row['description'];
				$tab['role'] = $row['role'];
				$avatar = $row['ID'].$row['avatar'];
			}
			$t->assign('tab', $tab);
			$t->assign('avatar', $avatar);
			$t->draw('user');
		}
	}
?>