<?php
session_start();
unset($_SESSION['e_haslo']);
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$login=$_SESSION['login'];
$StareHaslo = $_POST['StareHaslo'];
$NoweHaslo = $_POST['NoweHaslo'];
$PowtorzNoweHaslo = $_POST['PowtorzNoweHaslo'];
$dziala = true;
if(!empty($StareHaslo) && !empty($NoweHaslo) && !empty($PowtorzNoweHaslo))
{
    //przetworzenie zaszyfrowanego na dobre
    $query = "SELECT Login,Haslo FROM Rejestracja WHERE Login='$login'";
    $data=mysqli_query($con,$query);
    $wiersz = $data->fetch_assoc();
    //sprawdzenie czy użytk podał dobre haslo
    if(password_verify($StareHaslo, $wiersz['Haslo']))
    {
        //sprawdzenie czy oba nowe hasła są takie same oraz zgodne z zasadami haseł
        if((strlen($NoweHaslo)<5) || (strlen($NoweHaslo)>20))
        {
            $dziala=false;
            $_SESSION['e_haslo']="Nowe hasło musi posiadać od 5 do 20 znaków.";
        }
        if($NoweHaslo != $PowtorzNoweHaslo)
        {
            $dziala=false;
            $_SESSION['e_haslo']="Hasła muszą być takie same.";
        }
        //zaszyfrowanie nowego hasła
        if($dziala==true)
        {
            $haslo_szyfr=password_hash($NoweHaslo, PASSWORD_DEFAULT);
            $con->query("UPDATE Rejestracja SET Haslo='$haslo_szyfr' WHERE Login='$login'");
            $con->close();
            $_SESSION['e_haslo']="Zmiana hasła powiodła się.";
        }
    }
    else
    {
        $_SESSION['e_haslo']="Podano złe stare hasło.";
    }
}
else
{
    $_SESSION['e_haslo']="Nie wypełniono któregoś z pól.";
}
header("Location:external3.php");
exit();
?>
