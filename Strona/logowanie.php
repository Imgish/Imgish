<?php
session_start();
unset($_SESSION['e_login']);
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$login = $_POST['login'];
$haslo = $_POST['haslo'];
$query = "SELECT Login,Haslo FROM Rejestracja WHERE Login='$login'";
$data=mysqli_query($con,$query);
$wiersz = $data->fetch_assoc();     
if (mysqli_num_rows($data)>0 && password_verify($haslo, $wiersz['Haslo']))
{
    //if(password_verify($haslo, $wiersz['Haslo']))
    $_SESSION['zalogowany'] = true;
    $_SESSION['login'] = $login;
    header("Location:reload.php");
}
else
{
    //echo 'test';
    $_SESSION['e_login'] = "Nieprawidłowy login lub hasło.";
    header("Location:logowanieform.php");
}
$con->close(); 
//header("Location:reload.php");
exit();
?>
