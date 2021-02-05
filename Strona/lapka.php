<?php
session_start();
$_SESSION['login'];
$test1 = $_POST['Link'];
echo $test1;
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
SELECT * FROM Lapka WHERE Login = 'asd' AND IDZdjecia = 1
INSERT INTO Lapka( IDZdjecia, Login) VALUES (1,'adam8')
SELECT COUNT(*) FROM Lapka WHERE IDZdjecia = 1

$query = "SELECT * FROM Lapka WHERE Login = $_SESSION['login'] AND IDZdjecia = 1";
$data=mysqli_query($con,$query);
$wiersz = $data->fetch_assoc();     
if (mysqli_num_rows($data)>0 && password_verify($haslo, $wiersz['Haslo']))
{
    $_SESSION['zalogowany'] = true;
    $_SESSION['login'] = $login;
    header("Location:reload.php");
}
else
{
    $_SESSION['e_login1'] = "Nieprawidłowy login lub hasło.";
    header("Location:logowanieform.php");
}
$con->close(); 
















exit();
?>
