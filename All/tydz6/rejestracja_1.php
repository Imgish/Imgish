<?php
$con = mysqli_connect('mysql.cba.pl','imgishb','Imgishb1','imgish')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo1 = $_POST['haslo1'];
        $haslo2 = $_POST['haslo2'];
        $email = $_POST['email'];      
echo $login; 
echo $haslo1;
echo $email;      
$con->query("INSERT INTO Rejestracja(Login, Haslo, Email)
VALUES ('$login', '$haslo1', '$email')");
$con->close();
echo "Konto zostało utworzone!";
?>
