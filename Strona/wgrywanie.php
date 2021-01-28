<?php
session_start();
$login=$_SESSION['login'];
$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];
$tytul = $_POST['nazwapliku'];
$dataDoda=date('Y-m-d H:i:s');
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$query = "SELECT Nazwa FROM Obrazy WHERE Nazwa = '$plik_nazwa'";
$data=mysqli_query($con,$query);
$roz = pathinfo($plik_nazwa,PATHINFO_EXTENSION);
$nazwa1 = pathinfo($plik_nazwa,PATHINFO_FILENAME);

if (mysqli_num_rows($data)>0)
{
    echo "istnieje juz plik o takiej nazwie"; 
}
else 
{   
    if($roz == 'png' or $roz == 'jpg' or $roz == 'jpeg' or $roz =='gif')
    {
        if($plik_rozmiar <= 2000000)
        {
            if(strlen($nazwa1) <= 25)  //14
            {
                if($tytul <= 14)
                {
                    if(is_uploaded_file($plik_tmp))
                    {
                        $query3 = "SELECT ID FROM Rejestracja WHERE Login='$login'";
                        $data2=mysqli_query($con,$query3);
                        $wiersz = mysqli_fetch_array($data2);
                        $wiersz1 = $wiersz['ID'];
                        echo $wiersz1;
                        echo $plik_nazwa;
                        echo $tytul;
                        echo $plik_rozmiar;
                        echo $dataDoda;
                        $con->query("INSERT INTO Obrazy(IDUzytkownika, Nazwa, TytulObrazu, Rozmiar, DataWstawienia, Lapka) VALUES ('$wiersz1', '$plik_nazwa', '$tytul','$plik_rozmiar','$dataDoda','0')");
                        $con->close();
                        move_uploaded_file($plik_tmp, "obraz/".$plik_nazwa);
                        echo "Plik: <strong>$plik_nazwa</strong> o rozmiarze
                        <strong>$plik_rozmiar bajtów</strong> został przesłany na serwer!";
                    }
                    else
                    {
                       echo '"Nigdy nie będzie tak, że nie napotkasz problemów" ';
                    }
                }
                else
                {
                    echo 'Zbyt długi tytuł obrazu.';
                }
            }
            else
            {
                echo 'Za długa nazwa pliku(max 25 znaków).';
            }
        }
        else
        {
            echo 'Za duży rozmiar pliku!';
        }
    }
    else
    {
        echo 'Złe rozszerzenie.';
    }
}
//$con->close();
exit();
?>
