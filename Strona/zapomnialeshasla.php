<?php
session_start();
?>
<div class="main2">
									
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/PasswordChange.css">
    
    <head>
    </head>
    
    <body>
        
        <div Form class="FormRestore">
        <p class="sign" align="center">Przywróć hasło</p>
			<form class="form1" method="POST" action="zmiana-ustawien.php">
				<input class="stare_haslo" type="password" align="center" name="Login" placeholder="Login">
				<br>
				<input class="nowe_haslo" type="password" align="center" name="Email" placeholder="Email">
				</br>
				<input class="nowe_haslo" type="password" align="center" name="NoweHaslo" placeholder="Nowe haslo">
				<input class="powtorz_haslo" type="password" align="center" name="Powtórz-NoweHaslo" placeholder="Powtórz-NoweHaslo">
				<br>
				<input type="submit" value="Zmień hasło" name="ZmienHaslo" class="submit" align="center">
				</br>
		    </form>
		</div>
</div>
        
    </body>
</html>
    
