<?php
session_start();
$tytul = $_POST['Link'];
$pomoc=$_SESSION['login'];
echo $tytul;
echo $pomoc;
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$query = "SELECT * FROM Lapka WHERE TytulObrazu = '$tytu' AND Login = '$pomoc'" ;
$data=mysqli_query($con,$query);
if (mysqli_num_rows($data)>0)
{
    echo "dales juz lapke";
}
else
{
    
    
    $con->query("INSERT INTO Lapka(Login,TytulObrazu) VALUES
        ('$pomoc','$tytul')");
    echo "dziala";
}
$con->close(); 
















?>
