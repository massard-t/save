

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>inscription</title>
    </head>
    <body>
        <pre>
		<?php
            include "../includes/checks/check_sign_in.php";
        ?>
	</pre>
        <center>
            <!-- ../includes/check_sign_in.php -->
            <form action="sign_in.php" method="post">
                <table class="form">
                    <tr>
                        <th></th>
                    </tr>
                    <tr>
                        <td><input type="text" name="firstname" placeholder="firstname" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="lastname" placeholder="lastname" required></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="gender" id="">
                                <option value="1">male</option>
                                <option value="0">female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="date" name="birthday" placeholder="DDMMYYYY" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" placeholder="email" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="city" placeholder="city" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="address" placeholder="adresse" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="rue" placeholder="rue" required></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="numero" placeholder="numero" required></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" placeholder="********"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" placeholder=""></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" placeholder=""></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" placeholder=""></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" placeholder=""></td>
                    </tr>
                    <tr colspan="2">
                        <td><input type="submit" name="send" placeholder=""></td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>

