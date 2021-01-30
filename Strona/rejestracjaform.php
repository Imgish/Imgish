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
        
        
        <div class="RejMain">
									<p class="sign" align="center">Rejestracja</p>
									<p style="color:red;text-color:red;">
									<?php  
									
									if (isset($_SESSION['e_login'])) 
									{
									    
									    
									    echo $_SESSION['e_login'];
									    
									    
									}
									else
									{}
									
									
									
									
									
									?></p>
									<form class="form1" method="POST" action="rejestracja.php" style="text-align:center;">
									<input class="un" type="text" align="center" name="login" placeholder="login">
									<input class="pass" type="password" align="center" name="haslo1" placeholder="haslo">
									<input class="pass" type="password" align="center" name="haslo2" placeholder="powtórz hasło">
									<input class="pass" type="mail" align="center" name="email" placeholder="e-mail">
									<input type="submit" value="Utwórz konto" name="rejestruj" class="submit" align="center">
									</form>
									</div>
        
        
        
        
    </body>
    </html>
    
