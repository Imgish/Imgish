<?php
    $con = mysqli_connect('mysql.cba.pl','imgishb','Imgishb1','imgish')or die('Brak połączenia z serwerem MySQL.');
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];


        // sprawdzamy czy login i hasło są dobre
$query = "SELECT Login,Haslo FROM Rejestracja WHERE Login='$login' AND Haslo='$haslo';";
$data=mysqli_query($con,$query);
        

if (mysqli_num_rows($data)>0)
 {
            $_SESSION['zalogowany'] = true;
            $_SESSION['login'] = $login;
            echo "zalogowano";
            // zalogowany
        }
        else echo "Wpisano złe dane.";
$con->close(); 
?>	