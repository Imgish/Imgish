<?php
session_start();
?>

									
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/PasswordChange.css">

    <head>
    </head>
    
    <body>
    <div class="main2">    
        <div Form class="FormRestore">
        <p class="sign" align="center">Przywróć hasło</p>
        				<p class="RejError">
						<?php  
						
						if (isset($_SESSION['e_przywhaslo'])) 
						{
						    echo $_SESSION['e_przywhaslo'];
						}
						
						?></p>
        <form class="form1" method="POST" action="zapomnialeshasla1.php" style="text-align:center;">
				<input class="stare_haslo" type="text" align="center" name="Login" placeholder="login">
				<br>
				<input class="nowe_haslo" type="mail" align="center" name="Email" placeholder="email">
				</br>
				<input class="nowe_haslo" type="password" align="center" name="NoweHaslo" placeholder="nowe haslo">
				<input class="powtorz_haslo" type="password" align="center" name="PowtorzNoweHaslo" placeholder="powtórz-nowe haslo">
				<br>
				<input type="submit" value="Zmień hasło" name="ZmienHaslo" class="submit" align="center">
				</br>
		    </form>
		</div>
</div>
        
    </body>
</html>
