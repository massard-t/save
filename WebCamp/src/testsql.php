<?php
    require "../includes/connectdb.php";
    $query = 'SELECT * FROM data_base.Users_internship WHERE user_ID = 1';
    $result = mysqli_query($dtb, $query);
    $status = array(
    	"accept" => 0,
    	"waiting" => 0,
    	"refuse" => 0,
    		);
    while($number = mysqli_fetch_assoc($result)){
    	if ($number['status'] == 0)
    		$status['accept'] += 1;
    	else if ($number['status'] == 1)
    		$status['waiting'] += 1;
    	else
    		$status['refuse'] += 1;
    }
    print_r($status);
?>