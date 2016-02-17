<?php
	include "../includes/connectdb.php";

	$query = 'SELECT * FROM Internship WHERE Internship.ID NOT IN (SELECT Internship.ID FROM Internship, Users, Users_internship WHERE Internship.ID = Users_internship.intern_ID AND Users_internship.user_ID =' . $_SESSION['ID'] . ' AND Users_internship.user_ID = Users.ID)';
	$result = mysqli_query($dtb, $query);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$tab[$row['ID']]['name'] = $row['name'];
			$tab[$row['ID']]['place'] = $row['place'];
			$tab[$row['ID']]['skills'] = $row['skills'];
			$tab[$row['ID']]['society'] = $row['society'];
			$tab[$row['ID']]['date'] = $row['my_date'];
			$tab[$row['ID']]['description'] = $row['description'];
			$tab[$row['ID']]['ID'] = $row['ID'];
		}
		} 
	$t->assign('tab', $tab);
	$t->draw('list_stages');
?>