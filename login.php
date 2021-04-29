<!DOCTYPE html>
<html>
<?php
        $user = $_POST["username"];
        $pw = $_POST["password"];
		$username1 = "MARY";
        $username2 = "PETER";
        $password1 = "Aa123456";
        $password2 = "Bb123456";
        $log = 0;

        if ($user == "MARY" && $pw == "Aa123456" || $user == "PETER" && $pw == "Bb123456"){
            echo "<h1><center> Login successful </center></h1>";
            echo("<button onclick=\"location.href='MusicInd.html'\">Main Page</button>");
        }else {
            echo "<h1> Login failed. Invalid username or password.</h1>";
            echo("<button onclick=\"location.href='LoginPage.html'\">Login Page</button>");
        }
	 ?>
</html>