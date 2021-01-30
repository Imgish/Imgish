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
        
        <div Form class="Form">
        <p class="sign" align="center">Zmiana Hasla</p>
			<form class="form1" method="POST" action="zmiana-ustawien.php">
				<input class="stare_haslo" type="password" align="center" name="StareHaslo" placeholder="Stare Hasło">
				<br>
				<input class="nowe_haslo" type="password" align="center" name="NoweHaslo" placeholder="Nowe Hasło">
				</br>
				<input class="powtorz_haslo" type="password" align="center" name="PowtorzNoweHaslo" placeholder="Powtórz Nowe Hasło">
				<br>
				<input type="submit" value="Zmień hasło" name="ZmienHaslo" class="submit" align="center">
				</br>
		    </form>
		</div>
</div>
        
    </body>
</html>
    
