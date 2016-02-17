<?php
function check_age($dd, $mm, $yyyy) {

}
function check_date(&$date) {
	$date = explode("/", $date);
	$day = $date[0];
	$month = $date[1];
	$year = $date[2];
	echo $day . $month . $year;
	var_dump(checkdate($month,$day,$year));
	if ((checkdate($month,$day,$year) == true)) {
		echo "nice";
		$date = $year . "-" . $month . "-" . $day;
		return $date;
	} else {
		echo "invalid date syntax";
	}
}
?>