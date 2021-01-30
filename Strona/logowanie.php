<?php
session_start();
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];

        // sprawdzamy czy login i hasło są dobre
$query = "SELECT Login,Haslo FROM Rejestracja WHERE Login='$login'";
$data=mysqli_query($con,$query);
        
if (mysqli_num_rows($data)>0)
{
    $wiersz = $data->fetch_assoc();
    
    if(password_verify($haslo, $wiersz['Haslo']))
    {
    $_SESSION['zalogowany'] = true;
    $_SESSION['login'] = $login;
    }
    else
    {
       echo "niedziala";
   
    }
}
$con->close(); 


header("Location:reload.php");
exit();
?>
