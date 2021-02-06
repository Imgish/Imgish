<?php
session_start();
$tytul = $_POST['Link'];
$pomoc=$_SESSION['login'];
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');




$query = "SELECT * FROM Lapka WHERE TytulObrazu = '$tytul' AND Login = '$pomoc'" ;
$data=mysqli_query($con,$query);
if (mysqli_num_rows($data)>0)
{
  
     $con->query("DELETE FROM Lapka WHERE TytulObrazu = '$tytul' AND Login = '$pomoc'");
     $con->query("UPDATE Obrazy SET Lapka = (Lapka - 1) WHERE Nazwa = '$tytul'");
    
}
else
{
    $con->query("INSERT INTO Lapka(Login,TytulObrazu) VALUES
        ('$pomoc','$tytul')");
       $con->query("UPDATE Obrazy SET Lapka = (Lapka + 1) WHERE Nazwa = '$tytul'");
}
$con->close(); 
header("Location: Najnowsze2.php");
















?>
