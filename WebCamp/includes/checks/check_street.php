<?php
	function check_num($num)
	{
		if (filter_var($num, FILTER_VALIDATE_INT, array("options" => array("min_range"=>0))) === false) {
		    return FALSE;
		} else {
		    return TRUE;
		}
	}
	function check_streetname(&$street) {
		$street = filter_var($street, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_NO_ENCORE_QUOTES);
		return($street);
	}
?>