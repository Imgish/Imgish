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
        <form class="form1" method="POST" action="zapomnialeshasla1.php" style="text-align:center;">
				<input class="stare_haslo" type="text" align="center" name="Login" placeholder="Login">
				<br>
				<input class="nowe_haslo" type="mail" align="center" name="Email" placeholder="Email">
				</br>
				<input class="nowe_haslo" type="password" align="center" name="NoweHaslo" placeholder="Nowe haslo">
				<input class="powtorz_haslo" type="password" align="center" name="PowtorzNoweHaslo" placeholder="Powtórz-NoweHaslo">
				<br>
				<input type="submit" value="Zmień hasło" name="ZmienHaslo" class="submit" align="center">
				</br>
		    </form>
		</div>
</div>
        
    </body>
</html>
    
