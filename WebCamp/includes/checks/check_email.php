<?php
function email_trim(&$value) {
	$value = trim($value);
}
function check_email(&$email)
{
	if (isset($_POST['email'])) {
		email_trim($_POST['email']);
		$_POST['email'] = filter_var($_POST['email']);
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
		return TRUE;
		} else {
			return FALSE;
		}
	} else {
		return FALSE;
	}
}
?>