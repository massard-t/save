<script type="text/javascript">
</script>
<?php
require "../includes/connectdb.php";
echo "<script type=\"text/javascript\">
var my_position = [];
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(getPosition);
    } else {
        x.innerHTML = \"Geolocation is not supported by this browser.\";
    }
}
function getPosition(position)
{
	my_position = [position.coords.latitude, position.coords.longitude];
	document.cookie = 'posx =' + my_position[0];
	document.cookie = 'posy =' + my_position[1];
}

getLocation();
</script>";
if (isset($_SESSION['firstname'])){
	$query = 'UPDATE Users SET positionx="' . $_COOKIE['posx'] . '", positiony="' . $_COOKIE['posy'] . '" WHERE ID ="' . $_SESSION['ID'] . '";';
	mysqli_query($dtb, $query);
	$query = 'SELECT firstname, lastname FROM data_base.Users WHERE ID = "'.$_SESSION['ID'].'"';
	$result = mysqli_query($dtb, $query);
	$user = mysqli_fetch_assoc($result);
	//$lastname = $user['lastname'];	
	$query = 'SELECT * FROM data_base.Users_internship WHERE user_ID =  "'.$_SESSION['ID'].'"';
	$result = mysqli_query($dtb, $query);
	$status = array(
		"accept" => 0,
		"waiting" => 0,
		"refuse" => 0,
		);
	$total = 0;
	while ($number = mysqli_fetch_assoc($result)){
		if ($number['status'] == 0){
			$status['accept'] += 1;
			$total += 1;
		}elseif($number['status'] == 1){
			$status['waiting'] += 1;
			$total += 1;
		}else{
			$status['refuse'] += 1;
			$total += 1;
		}
	}
	$query = "SELECT avatar FROM Users WHERE ID = '".$_SESSION['ID']."';";
	$result = mysqli_query($dtb, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['avatar'] == "") {
			$t->assign('avatar', 'no_def');
		} else {
			$t->assign('avatar', $_SESSION['ID'].$row['avatar']);
		}
	}
	$t->assign('status', $status);
	$t->assign('total', $total);
	$t->assign('user', $user);
	$t->draw('profil');
}else{
	header("Location: ../index.php?co=false");
}
?>