<?php
	include "../core/head.php";
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
	?>
	<div class="core">
		<center>
			<div class="contact">
				<form action="endorder.php" method="post">
					<table>
						<tr>
							<td><label for="payment">Credit card number:</label></td>           <td><input type="text" name="zipcode" pattern="[0-9]{16}" placeholder="xxxxxxxxxxxx" maxlength="16" required></td> 
						</tr>
						<tr>
							<td><label for="payment">Expiration date:</label></td>            <td><select class="short" name="month" required><option>01<option>02<option>03<option>04<option>05<option>06<option>07<option>08<option>09<option>10<option>11<option>12<select/><select class="short" name="year" required><option>2015<option>2016<option>2017<option>2018<option>2019<option>2020<option>2021<option>2022</td>
						</tr>
						<tr>
							<td><label for="payment">Security code:</td><td><input type="text" pattern="[0-9]{3}" maxlength="3" size="3" required></td>
						</tr>
						<tr>
							<td></td><td><input type="submit" value="Confirm"></td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	<?php
		include "../core/footer.php";
	?>