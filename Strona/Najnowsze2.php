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



$con =mysqli_connect('localhost','id15971773_bazaio20test','JakiesLosoweHaslo12!','id15971773_projektio')or die('Brak połączenia z serwerem MySQL.');

$obrazyzaladowane = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$obrazyzaladowanetytul = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16); 
$obrazyzaladowanelapki = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16);
for($pom1=$zacz; $pom1<=$skon ; $pom1=$pom1+1)
{
$query = "SELECT * FROM (SELECT *, (ROW_NUMBER() OVER( ORDER BY DataWstawienia DESC))'test' FROM Obrazy)o WHERE o.test =$pom1";
$test=mysqli_query($con,$query);
$wiersz = $test->fetch_assoc();
$obrazyzaladowane[$pom1]=$wiersz['Nazwa'];
$obrazyzaladowanetytul[$pom1]=$wiersz['TytulObrazu'];
$obrazyzaladowanelapki[$pom1]=$wiersz['Lapka'];

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
							<div class="glowna-1 gallery-one" style="text-align: center;">
									<div class="grid-item "">
									
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
                            <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[1]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="far fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="far fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
                        </figure>
                                      
                                    </div>
                                    <div class="grid-item">
                                   
                                        <figure class="effect-sadie">
                                        <figure class="effect-sadie" style="z-index:1;">
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
                                             <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[2]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
                        </figure>
                                    </div>
                                    
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[3]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
								<B>
									<?php echo "$obrazyzaladowanelapki[4]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[5]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[6]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
								    <B>
									<?php echo "$obrazyzaladowanelapki[7]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
                        </figure>
                                    </div>
                                    <div class="grid-item">
                                        <figure class="effect-sadie">
                                            <img src="obraz/<?php echo "$obrazyzaladowane[8]";?>" alt="Image" class="img-fluid tm-img">
                                            <figcaption>
                                                <h2 class="tm-figure-title"> <span><strong>
                                                    <B>
									                <?php echo "$obrazyzaladowanelapki[8]";?>
									                </B>
                                                </strong></span></h2>
                                                <p class="tm-figure-description"></p>
                                                <a href="obraz/<?php echo "$obrazyzaladowane[8]";?>"></a>
                                            </figcaption>           
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									liczba lapek aktualna
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[9]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[10]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[11]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                      <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[12]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[13]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[14]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[15]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
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
                                        <div class="Oceny">
                               <div class="liczba" style="float:left";>
									<B>
									<?php echo "$obrazyzaladowanelapki[16]";?>
									</B>
								</div>
								<div class="glos" style="float:right";>
                                    <a onclick="myFunction()" style="text-align:right;;z-index:10;position:relative;">
									
									<i class="fas fa-plus-square" style="color:black;font-size:2vw;"></i>
									<i class="fas fa-minus-square" style="color:black;font-size:2vw;"></i>
									
									</a>
								</div>
							</div>
                        </figure>
                                    </div> 
                                
                                <form action="" method="POST" onclick='window.location.reload();'>
									
									<input type="submit" class="poprzednia_strona" value="Poprzednia strona" name="powrot">   
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
