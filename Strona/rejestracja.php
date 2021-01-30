<?php
session_start();
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
        $email = $_POST['email']; 
        
$dziala=true;
if(isset($_POST['login']) and isset($_POST['haslo1']) and isset($_POST['haslo2']) and isset($_POST['email']))
{
    //sprawdzanie loginu
    if((strlen($login)<3) || (strlen($login)>20))
    {
        $dziala=false;
        $_SESSION['e_login']="Login musi posiadać od 3 do 20 znaków.";
     
    }
    if(ctype_alnum($login)==false)
    {
        $dziala=false;
        $_SESSION['e_login']="Login musi składać się tylko z liter i cyfr(bez polskich liter).";
        
    }
    
    //sprawdzanie e-mailu
    $email2=filter_var($email, FILTER_SANITIZE_EMAIL);
    if((filter_var($email2, FILTER_VALIDATE_EMAIL)==false) || ($email2 != $email))
    {
        $dziala=false;
        $_SESSION['e_login']="Błędny email.";
        
    }
    
    //sprawdzanie hasła
    if((strlen($haslo1)<5) || (strlen($haslo1)>20))
    {
        $dziala=false;
        $_SESSION['e_login']="Haslo musi posiadać od 5 do 20 znaków.";
        
    }
    if(ctype_alnum($haslo1)==false)
    {
        $dziala=false;
        $_SESSION['e_login']="Hasło musi składać się tylko z liter i cyfr(bez polskich liter).";
        
    }
    if($haslo1 != $haslo2)
    {
        $dziala=false;
        $_SESSION['e_login']="Hasła muszą być takie same.";
       
    }
    
}
else
{
        $dziala=false;
        $_SESSION['e_login']="Nie wypełniono wszystkich pól.";
}


if($dziala==true)
{
$haslo_szyfr=password_hash($haslo1, PASSWORD_DEFAULT);
$con->query("INSERT INTO Rejestracja(Login, Haslo, Email)
VALUES ('$login', '$haslo_szyfr', '$email')");
$con->close();
header("Location:reload.php");
}
header("Location:rejestracjaform.php");
exit();
?>
