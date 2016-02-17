<?php
function email($mail){
	if ((filter_var($mail, FILTER_VALIDATE_EMAIL)) != FALSE){
	} else {
		return(1);
	}
}

function check_pren($word)
{
	if ((filter_var($word, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-z]+/")))) != FALSE) {
	} else{
		return(1);
	}
}

function check_nom($word)
{
	if ((filter_var($word, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[A-z]+/")))) != FALSE) {
	} else{
		return(1);
	}
}

function check_paswd($mdp)
{
	if ((filter_var($mdp, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{6,18}/")))) != FALSE) {
	}
	else {
		return(1);
	}
}

function check_twopwd($le_password1, $le_password2)
{
	if ($le_password1 == $le_password2) {
	} else {
		return(1);
	}
}

function check_bday($bday)
{
	if ((filter_var($bday, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[12][0-9]{3}[\/][01][0-9][\/][123][0-9]/")))) != FALSE) {
	} else {
		return(1);
	}
}

function check_countr($check_country)
{
	if ((filter_var($check_country, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[A-z]+/")))) != FALSE) {
	} else {
		return(1);
	}
}

function check_city($city)
{
	if ((filter_var($city, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[A-z]+/")))) != FALSE) {
		echo "City IS SET";
	} else {
		return(1);
	}
}

function check_zip($zip)
{
	if ((filter_var($zip, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[0-9]{5}/")))) != FALSE) {
	} else {
		return(1);
	}
}

function check_addr($addr)
{
	if ((filter_var($addr, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{4,}/")))) != FALSE) {
	} else {
		return(1);
	}
}

function checkcheck($check)
{
	if ($check != "") {
		header("Location: ../src/sign_in_error.php");
	}
}

$checker = "";
echo "<a href='../src/sign_in.php'>get back</a>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
$checker = email($_POST['email']);
checkcheck($checker);
$checker = check_pren($_POST['lastname']);
checkcheck($checker);
$checker = check_nom($_POST['firstname']);
checkcheck($checker);
$checker = check_paswd($_POST['password']);
checkcheck($checker);
$checker =	check_twopwd($_POST['password'], $_POST['confirmpass']);
checkcheck($checker);
$checker =	check_bday($_POST['birthday']);
checkcheck($checker);
$checker =	check_countr($_POST['country']);
checkcheck($checker);
$checker =	check_city($_POST['city']);
checkcheck($checker);
$checker =	check_addr($_POST['address']);
checkcheck($checker);
$checker =	check_zip($_POST['zipcode']);
$_POST['birthday'] = str_replace("/", "-", $_POST['birthday']);


function add_the_user($tab)
{
	$bdd = mysqli_connect('localhost', 'bob', '224499', 'segfault_massar_t');
	$sql = "SELECT * FROM Utilisateurs ORDER BY Utilisateurs.ID DESC;";
	$result = mysqli_query($bdd, $sql);
	$row = mysqli_fetch_row($result);
	$last_id = $row[0];
	$sql = "SELECT * FROM Utilisateurs WHERE Email='".$_POST['email']."';";
	echo $sql;
	$result = mysqli_query($bdd, $sql);
	printf(mysqli_num_rows($result));
	if (mysqli_num_rows($result) >= 1) {
		echo "Redirecting...";
		header("Location: ../includes/sign_in_error.php");
	} else {
		echo $last_id . "<br />";
		$add_us = "INSERT INTO `Utilisateurs` (`ID`, `Nom`, `Prenom`, `Email`, `Passwd`, `Date_de_naissance`, `Ville`, `Adresse`, `Code_postale`, `Pays`, `Sexe`, `Roles`, `Date_creation`, `Date_modification`) VALUES ('".($last_id+1)."','".$_POST['lastname']."','".$_POST['firstname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['birthday']."','".$_POST['city']."','".$_POST['address']."',".$_POST['zipcode'].",'".$_POST['country']."','homme',2,'".date('Y-m-d')."','".date('Y-m-d')."');";
		echo "<br />" ;
		echo $add_us;
		$query = mysqli_query($bdd, $add_us);
		header("Location: ../src/sign_in_thanks.php");
	}
}
add_the_user($_POST);
?>