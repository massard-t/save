<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>

<form action="pdf_import.php" method="post">
	<input type="text" name="presentation" id="">
	<br>
	<input type="text" name="contexte" id="">
	<br>
	<input type="text" name="details" id="">
	<br>
	<input type="text" name="competences" id="">
	<br>
	<input type="text" name="study_level" id="">
	<br>
	<input type="text" name="informations" id="">
	<br>
	<input type="text" name="remuneration" id="">
	<br>
	<input type="submit" name="submit pdf" id="">
	<br>
</form>