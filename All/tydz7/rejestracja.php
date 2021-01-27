<?php
$con = mysqli_connect('localhost','id15893153_imgishadmin','Imgisher1234!','id15893153_imgishdb')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
        $email = $_POST['email']; 
        
$dziala=true;
if(isset($_POST['email']))
{
    if((strlen($login)<3) || (strlen($login)>20))
    {
        $dziala=false;
        $_SESSION['e_login']="Login musi posiadać od 3 do 20 znaków.";
        echo "Zła dł loginu";
    }
    if(ctype_alnum($login)==false)
    {
        $dziala=false;
        $_SESSION['e_login']="Login musi składać się tylko z liter i cyfr(bez polskich liter).";
        echo "Tylko litery i cyfry bez polskich liter";
    }
    $email2=filter_var($email, FILTER_SANITIZE_EMAIL);
    if((filter_var($email2, FILTER_VALIDATE_EMAIL)==false) || ($email2 != $email))
    {
        $dziala=false;
        $_SESSION['e_email']="Błędny email.";
        echo "Błędny email.";
    }
    
}
if($dziala==true)
{
$haslo_szyfr=password_hash($haslo1, PASSWORD_DEFAULT);
//echo $haslo_szyfr;
$con->query("INSERT INTO Rejestracja(Login, Haslo, Email)
VALUES ('$login', '$haslo_szyfr', '$email')");
$con->close();
echo "Konto zostało utworzone!";
//header("Location: https://imgish.000webhostapp.com/");
}
exit();
?>
