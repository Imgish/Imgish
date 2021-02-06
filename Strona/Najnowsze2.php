<?php
session_start();

                                if(isset($_REQUEST['glowna']))
                                {
                                     unset ($_SESSION["liczbaz"] );
                                }
                                else
                                if(isset($_REQUEST['przod']))
                                {
                                    $_SESSION["liczbaz"]++;
                                }
                                else
                                if(isset($_REQUEST['powrot']))
                                {
                                    $_SESSION["liczbaz"]--;
                                }



if(isset($_SESSION["liczbaz"]))
{
$zacz=($_SESSION["liczbaz"]*16)-15;
$skon=($_SESSION["liczbaz"]*16);
}
else
{
$_SESSION["liczbaz"]=1;
$zacz=1;
$skon= 16;
}

$login=$_SESSION['login'];

$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');

$obrazyzaladowane = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$obrazyzaladowanetytul = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$obrazyzaladowanelapki = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
$lapa = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
$liczba=0;
for($pom1=$zacz; $pom1<=$skon ; $pom1=$pom1+1)
{
    $liczba=$liczba+1;
    
$query = "SELECT * FROM (SELECT *, (ROW_NUMBER() OVER( ORDER BY DataWstawienia DESC))'test' FROM Obrazy)o WHERE o.test =$pom1";
$test=mysqli_query($con,$query);
$wiersz = $test->fetch_assoc();
$obrazyzaladowane[$liczba]=$wiersz['Nazwa'];
$obrazyzaladowanetytul[$liczba]=$wiersz['TytulObrazu'];
$obrazyzaladowanelapki[$liczba]=$wiersz['Lapka'];



$query5 = "SELECT * FROM Lapka WHERE TytulObrazu = '$obrazyzaladowane[$liczba]' AND Login = '$login'" ;
$data=mysqli_query($con,$query5);
if (mysqli_num_rows($data)>0)
{$lapa[$liczba]=1;}else{$lapa[$liczba]=0;}
if($liczba==16)
{$liczba=0;}


}
$con->close(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style3.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">   
    <link rel="stylesheet" href="css/img.css">  
    <link rel="stylesheet" href="css/logrej1.css">   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/ajaxtabs.js"></script>
        <link rel="stylesheet" type="text/css" href="js/ajaxtabs.css" />
		<link rel="stylesheet" type="text/css" href="css/buttons.css" />
	<script src="https://kit.fontawesome.com/424ca7393a.js" crossorigin="anonymous"></script>	

        <script>
		
            var tm_gray_site = false;
            
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
</script>
</head>
    <body style="width:100%;height:100%">
							<div class="glowna-1 " style="text-align: center;">
							    <?php 	if($obrazyzaladowane[1]!=NULL) {?> 
								<div class="grid-item ">
								
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[1]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[1];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[1]";?>"></a>
                                                   
                                            </figcaption>  
                                            </figure>
                                    <div class="Oceny">
                                        <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[1]";?>
									</B>
								        </div>
							<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[1]";?>">
									    <?php if($lapa[1]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        
                        </div>
                                <?php  }  if($obrazyzaladowane[2]!=NULL) {?>
                                    <div class="grid-item">
                                   
                                        
                                        <figure class="effect-sadie gallery-one" style="z-index:1;">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[2]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"><span>
                                                    <strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[2];
                                                ?>
                                                </strong>
                                                    </span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[2]";?>"></a>
                                                
                                            </figcaption>
                                            </figure>
                                             <div class="Oceny">
                                        <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[2]";?>
									</B>
								        </div>
							<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[2]";?>">
									    <?php if($lapa[2]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        
                        </div>
                                    <?php  }  if($obrazyzaladowane[3]!=NULL) {?>
                                    <div class="grid-item">
                                        
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[3]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"><span>
                                                    <strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[3];
                                                ?>
                                                </strong>
                                                    </span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[3]";?>"></a>
                                            </figcaption>  </figure>         
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[3]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[3]";?>">
									    <?php if($lapa[3]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div>
                        <?php  }  if($obrazyzaladowane[4]!=NULL) {?>
                                    <div class="grid-item">
                                    
                                        
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[4]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[4];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[4]";?>"></a>
                                            </figcaption>  </figure>         
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
								<B>
									<?php echo "$obrazyzaladowanelapki[4]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[4]";?>">
									    <?php if($lapa[4]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div> <?php  }  if($obrazyzaladowane[5]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[5]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[5];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[5]";?>"></a>
                                            </figcaption>     </figure>      
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[5]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[5]";?>">
									    <?php if($lapa[5]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div> <?php  }  if($obrazyzaladowane[6]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[6]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[6];
                                                ?>
                                                </strong></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[6]";?>"></a>
                                            </figcaption></figure>
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[6]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[6]";?>">
									    <?php if($lapa[6]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[7]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[7]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[7];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[7]";?>"></a>
                                            </figcaption>  </figure>         
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
								    <B>
									<?php echo "$obrazyzaladowanelapki[7]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[7]";?>">
									    <?php if($lapa[7]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[8]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[8]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                    <B>
									                <?php echo "$obrazyzaladowanelapki[8]";?>
									                </B>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[8]";?>"></a>
                                            </figcaption>   </figure>        
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[8]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[8]";?>">
									    <?php if($lapa[8]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div>  <?php  }  if($obrazyzaladowane[9]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[9]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[9];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[9]";?>"></a>
                                            </figcaption>   </figure>        
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[9]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[9]";?>">
									    <?php if($lapa[9]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[10]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[10]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[10];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[10]";?>"></a>
                                            </figcaption></figure>
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[10]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[10]";?>">
									    <?php if($lapa[10]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[11]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[11]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[11];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[11]";?>"></a>
                                            </figcaption>      </figure>     
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[11]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[11]";?>">
									    <?php if($lapa[11]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[12]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[12]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[12];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[12]";?>"></a>
                                            </figcaption> </figure>          
                                      <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[12]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[12]";?>">
									    <?php if($lapa[12]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[13]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[13]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span>
                                                    <strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[13];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[13]";?>"></a>
                                            </figcaption>    </figure>       
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[13]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[13]";?>">
									    <?php if($lapa[13]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[14]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[14]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span>
                                                    <strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[14];
                                                ?>
                                                </strong>
                                                    </span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[14]";?>"></a>
                                            </figcaption></figure>
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[14]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[14]";?>">
									    <?php if($lapa[14]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[15]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[15]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[15];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[15]";?>"></a>
                                            </figcaption>     </figure>      
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[15]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[15]";?>">
									    <?php if($lapa[15]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div><?php  }  if($obrazyzaladowane[16]!=NULL) {?>
                                    <div class="grid-item">
                                        <figure class="effect-sadie gallery-one">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[16]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[16];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[16]";?>"></a>
                                            </figcaption>         </figure>  
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[16]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
								<form class="form1" method="POST" name="lapa"action="lapka.php" style="text-align:center;padding-top: 0%;">
									<Button type="submit" name="Link" 
									value="<?php echo "$obrazyzaladowane[16]";?>">
									    <?php if($lapa[16]==0)
									    {echo "like";}else{echo "dislike";}?>
									    
									    
									</button></form>
								</div>
						    </div>
                        </div> 
                                <?php  } ?>
                                <form action="" method="POST" onclick='window.location.reload();'>
									<?php if($zacz>=16){?>
									<input type="submit" class="poprzednia_strona" value="Poprzednia strona" name="powrot">  <?php } ?>
									<input type="submit" class="strona_glowna"  value="Strona główna" name="glowna">       
									<input type="submit" class="kolejna_strona" value="Następna strona" name="przod">       
								</form>
								
						
                                

                                    

	</div>
	
	
	        <script src="js/tether.min.js"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
	
	
	
	
	
	
	<script>

            function adjustHeightOfPage(pageNo) {

                var pageContentHeight = 0;

                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }
               
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight
                                        + $('.tm-footer').outerHeight();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }

            /*
                Everything is loaded including images.
            */
            $(window).load(function(){

                adjustHeightOfPage(1); // Adjust page height

                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				
                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });

                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });

            });
        </script>    
	
	
	
	
	
	
	</body>
	</html>
