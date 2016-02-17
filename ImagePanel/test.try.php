<?php
try {
	if ((get_headers("http://asjfhdlasdffeeeee.com/") == false)) {
		throw new Exception("Unable to reach host");
	}
	$headers = get_headers("http://coerlorsublime.com/");
	if (!preg_match("/200 OK/", $headers[0]))
		throw new Exception("Unable to reach host");
	else
		return (true);
}
catch(Exception $e) {
	echo "Error: " . $e ->getMessage();
}
var_dump($e);
if (!fopen("http://colorsublime.com/", 'r'))
	exit("error while opening source");
echo "works";
$source = fopen("http://colorsublime.com/", 'r');
while (!feof($source)) {
	$contents .= fread($source, 1024);
}

$contents = fread($source, filesize($source));
var_dump($source);
// var_dump($contents)
?>