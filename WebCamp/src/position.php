<?php
require "../includes/connectdb.php";

function distance($lat1, $lon1, $lat2, $lon2) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);
  return ($miles * 1.609344);
}
$query = "SELECT positionx, positiony, ID FROM Users WHERE ID !='" . $_SESSION['ID'] ."'";
$response = mysqli_query($dtb, $query);
$all_pos = NULL;
while ($result = mysqli_fetch_assoc($response))
{
  if (distance($result['positionx'], $result['positiony'], $_COOKIE['posx'], $_COOKIE['posy']) < 10)
  {
    $all_position[$result['ID']]['x'] = $result['positionx'];
    $all_position[$result['ID']]['y'] = $result['positiony'];
    $all_pos = $all_pos . "&markers=color:blue|" . $result['positionx']. "," . $result['positiony'];
  }
}
setcookie("pos", $all_pos);
?>
<script>

var x = document.getElementById("demo");
function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function getPosition(position)
{
  var my_position = [position.coords.latitude, position.coords.longitude];
  return(my_position);
}
function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&size=1000x400&maptype=terrain&sensor=false&markers=color:red|"+latlon+"<?php echo $all_pos; ?>";
    document.querySelector("body").innerHTML = "<img style=\"position:absolute; top:0px; left:0px;\" src='"+img_url+"'>";
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
getLocation();
</script>
