<?php
session_start();
require "../includes/connectdb.php";
unset($dtb);
$dtb = mysqli_connect('localhost', 'bayle_n', 'nono', 'data_base', 2222);
if ($dtb === false) {
    echo "error " . mysqli_connect_errno();
} else {
	$name = $_SESSION['firstname'];
	$msg = $_POST['msg'];
	$query = "INSERT INTO data_base.tchat(Prenom, Message) VALUES ('" . $name ."','". $msg."');";
	$test = mysqli_query($dtb, $query);
}
header("Location: ajax_chat.php");
?>
