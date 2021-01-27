<?php
session_start();
    $con =mysqli_connect('localhost','id15893153_imgishadmin','Imgisher1234!','id15893153_imgishdb')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];


        // sprawdzamy czy login i hasło są dobre
$query = "SELECT Login,Haslo FROM Rejestracja WHERE Login='$login'";
$data=mysqli_query($con,$query);
        
//$haslo_szyfr=password_hash($haslo, PASSWORD_DEFAULT);
if (mysqli_num_rows($data)>0)
 {
    $wiersz = $data->fetch_assoc();
    
    if(password_verify($haslo, $wiersz['Haslo']))
    {
    echo "zalogowano";
    $_SESSION['zalogowany'] = true;
    $_SESSION['login'] = $login;
    
    // zalogowany
    }
//    else 
//    {
//        echo "złe dane";
//        echo $haslo."--------";
//        echo $wiersz['Haslo'];
//    }
 }
        else echo "Wpisano złe dane.";

$con->close(); 
//header("Location: https://imgish.000webhostapp.com/");
exit();
?>