<?php
session_start();
$tytul = $_POST['przycisk'];

$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$query4 = "DELETE FROM Obrazy WHERE Nazwa = '$tytul'";
mysqli_query($con,$query4);
$query5 = "DELETE FROM Lapka WHERE TytulObrazu = '$tytul'";
mysqli_query($con,$query5);


$con->close(); 
header("Location:zarz-zdj.php");
?>
