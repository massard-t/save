<?php
	if (isset($_POST['email'])) {
		function email_trim(&$value) {
			$value = trim($value);
		}
		email_trim($_POST['email']);
		$_POST['email'] = filter_var($_POST['email']);
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
		echo $_POST['email'] ." is valid";
		} else {
			echo $_POST['email'] . " isn't valid";
		}
	} else {
		ECHO "MISSING EMAIL";
	}
?>