<?php
session_start();
$con = mysqli_connect('localhost', 'id15971773_bazaio20test', 'JakiesLosoweHaslo12!', 'id15971773_projektio') or die('Brak połączenia z serwerem MySQL.');
$login = $_POST['Login'];
$email = $_POST['Email'];
$NoweHaslo = $_POST['NoweHaslo'];
$PowtorzNoweHaslo = $_POST['PowtorzNoweHaslo'];
$dziala = true;
if (!empty($login) && !empty($email) && !empty($NoweHaslo) && !empty($PowtorzNoweHaslo))
{
    $query = "SELECT Login,Email FROM Rejestracja WHERE Login='$login' AND Email = '$email'";
    $data = mysqli_query($con,$query);
    if (mysqli_num_rows($data) > 0)
    {
        if ((strlen($NoweHaslo) < 5) || (strlen($NoweHaslo) > 20))
        {
            $dziala = false;
            //$_SESSION['e_login'] = "Haslo musi posiadać od 5 do 20 znaków.";
            echo 'Haslo musi posiadać od 5 do 20 znaków';
        }
        else
        {
            if (ctype_alnum($NoweHaslo) == false)
            {
                $dziala = false;
                //$_SESSION['e_login'] = "Hasło musi składać się tylko z liter i cyfr(bez polskich liter).";
                echo 'Hasło musi składać się tylko z liter i cyfr(bez polskich liter).';
            }
            else
            {
                if ($NoweHaslo != $PowtorzNoweHaslo)
                {
                    $dziala = false;
                    //$_SESSION['e_login'] = "Hasła muszą być takie same.";
                    echo 'Hasła muszą być takie same.';
                }
            }
        }
        if($dziala==true)
        {
            $haslo_szyfr=password_hash($NoweHaslo, PASSWORD_DEFAULT);
            $con->query("UPDATE Rejestracja SET Haslo='$haslo_szyfr' WHERE Login='$login' AND Email = '$email'");
            $con->close();
            echo 'Zmiana hasła powiodła się.';
        }
    }
    else
    {
        echo 'Nie ma takiego użytkownika.';
    }
}  
exit();
?>