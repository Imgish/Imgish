<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
	


</head>
    <body >
        <?php
$login=$_SESSION['login'];

$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');
$obraz= array(1,2,3);
$query1 = "SELECT ID FROM Rejestracja WHERE Login='$login'";
        $data1=mysqli_query($con,$query1);
        $wiersz = mysqli_fetch_array($data1);
        $id_u = $wiersz['ID'];
       
        for($i=1;$i<4;$i++)
        {
          
        $query2 = "SELECT * FROM (SELECT *, (ROW_NUMBER() OVER( ORDER BY DataWstawienia DESC))'test' FROM Obrazy WHERE IDUzytkownika=$id_u)o WHERE o.test =$i";
        $data2=mysqli_query($con,$query2);
$wiersz1 = $data2->fetch_assoc();
$obraz[$i]=$wiersz1['Nazwa'];

        }
        $con->close();
            ?>
    
        <?php
             if($obraz[1]==NULL)
             {
                 if($obraz[2]==NULL)
                    {
                        if($obraz[3]==NULL)
                        {
                            echo "Nie wgrałeś jeszcze żadnego obrazu na strone.";
                        }
                     
                    }
             }
             
		?>			    
								
								
                                        <?php 	if($obraz[1]!=NULL) {?> 
                                        <div>
                                        <h2 > <span><strong>
                                                <?php 
                                                echo $obraz[1];
                                                ?>
                                                </strong></span></h2>
                                    <img src="obraz/<?php echo "$obraz[1]";?>" 
                                    width="500vw" height="400vw" alt="Image" class="img-fluid tm-img">
                                           
                                                
                                                
<form method="POST" name="usun" action="usun-z.php">
									<Button type="submit" name="przycisk" 
									value="<?php echo "$obraz[1]";?>">Usuń
									</button></form></div>
                                            
                                    
							
						        
						         
							
								
                                        <?php }	if($obraz[2]!=NULL) {?> 
                                        <h2 > <span><strong>
                                                <?php 
                                                echo $obraz[2];
                                                ?>
                                                </strong></span></h2>
                                            <img src="obraz/<?php echo "$obraz[2]";?>" 
                                    width="500vw" height="400vw" alt="Image" class="img-fluid tm-img">
                                           
                                              
                                                
                                                
                                                <form method="POST" name="usun" action="usun-z.php">
									<Button type="submit" name="przycisk" 
									value="<?php echo "$obraz[2]";?>">Usuń
									</button></form>
                                                   
                                           
							
						         
						        
							   
							
								
                                        <?php }	if($obraz[3]!=NULL) {?> 
                                        <h2 > <span><strong>
                                                <?php 
                                                echo $obraz[3];
                                                ?>
                                                </strong></span></h2>
                                           <img src="obraz/<?php echo "$obraz[3]";?>" 
                                    width="500vw" height="400vw" alt="Image" class="img-fluid tm-img">
                                           
                                                
                                                
                                    <form method="POST" name="usun" action="usun-z.php">
									<Button type="submit" name="przycisk" 
									value="<?php echo "$obraz[3]";?>">Usuń
									</button></form>
                                              <?php }?>      
        </div>

	</body>
	</html>
