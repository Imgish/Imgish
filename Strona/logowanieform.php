<?php
session_start();
?>
<div>
									
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/logrej.css"> 
    </head>
    <body>
        <div class="LogMain">
		<p class="sign" align="center">Logowanie</p>
			<form class="form1" method="POST" action="logowanie.php" style="text-align:center;">
				<input class="un" type="text" align="center" name="login" placeholder="login">
				<input class="pass" type="password" align="center" name="haslo" placeholder="haslo">
				<!--<a class="submit" align="center" name="loguj"></a>-->
				<input type="submit" value="Zaloguj" name="loguj" class="submit" align="center">
				</form>  
				 <p align="center"><a href="zapomnialeshasla.php" class="ResetHasla">Zapomniałeś hasła?</p>
				       
</div>

    </body>
    </html>
    
