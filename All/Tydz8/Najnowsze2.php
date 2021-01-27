<?php

session_start();
if(isset($zmienna))
{$zmienna=$zmienna+15;}
else
{$zmienna=1;}
$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');

$obrazyzaladowane = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$obrazyzaladowanetytul = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$pom2=$pom1+16;

for($pom1=$zmienna; $pom1<=$pom2 ; $pom1=$pom1+1)
{
$query = "SELECT * FROM (SELECT *, (ROW_NUMBER() OVER( ORDER BY DataWstawienia DESC))'test' FROM Obrazy)o WHERE o.test =$pom1";
$test=mysqli_query($con,$query);
$wiersz = $test->fetch_assoc();
$obrazyzaladowane[$pom1]=$wiersz['Nazwa'];
$obrazyzaladowanetytul[$pom1]=$wiersz['TytulObrazu'];
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
							<div class="glowna-1">
									<div class="grid-item">
                                        <figure class="effect-sadie">
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
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
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
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
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
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[4]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[4];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[4]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>  
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[5]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[5];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[5]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[6]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[6];
                                                ?>
                                                </strong></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[6]";?>"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[7]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[7];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[7]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[8]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[8];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[8]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>   
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[9]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[9];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[9]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[10]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[10];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[10]";?>"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[11]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[11];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[11]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[12]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[12];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[12]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
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
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[14]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span>
                                                    <strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[1];
                                                ?>
                                                </strong>
                                                    </span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[14]";?>"></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[15]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[15];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[15]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[16]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                <?php 
                                                echo $obrazyzaladowanetytul[16];
                                                ?>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[16]";?>"></a>
                                            </figcaption>           
                                        </figure>
                                    </div> 
	</div>
	</body>
	</html>