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
    <link rel="stylesheet" href="css/logrej.css">   
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

    <body>
        
        <!-- Content -->
        <div class="cd-hero">

            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-picture-o tm-brand-icon"></i>IMGISH</a>
                        <?php
                        if (isset($_SESSION['login'])) 
                        {?>
                        <?php 
                        ?>
                                        <form class="form2" method="POST" action="logout.php">
										<input type="submit" value="Wyloguj" name="loguj" class="submit" align="center">
										</form>
                        <?php } 
                        else
                        { ?>
                        <!-- <button>nie zalogowany</button> -->
                        <?php
                        }?>

                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
<ul class="nav navbar-nav">
<li class="selected">
   <div id="testowylik1"> 
   <a href="Najnowsze2.php"   rel="#iframe" style="padding:0;">
    <input type="submit" 
    value="Najnowsze"
    style="border:unset"
    style="text-align:center;padding:0;"
    class="nav-link">
    </a>
    </div>
</li >                                
<!--<li class="selected">
   <div id="testowyklik2"> 
   <a href="Zdjecia-uzytkownika.php"   rel="#iframe" style="padding:0;">
    <input type="submit" 
    value="Konto"
    style="border:unset"
    style="text-align:center;padding:0;"
    class="nav-link">
    </a>
    </div>
</li>  -->   
<li class="nav-item">

    
    
    
    <div id="testowyklik2"> 
   <a href="Zdjecia-uzytkownika.php"   rel="#iframe" style="padding:0;" data-no="2">
    <input type="submit" 
    value="Kategorie"
    style="border:unset"
    style="text-align:center;padding:0;"
    class="nav-link">
    </a>
    </div>
    
    
    
    
   
</li>
<li class="nav-item">
                                    <a class="nav-link" href="#0" data-no="3">FAQ</a>
                                </li>
<li class="nav-item">
    <a class="nav-link" href="#0" data-no="4">
    	<?php
    	if (isset($_SESSION['login']))
    	{
        echo "Witaj <br>".$_SESSION['login'];
    	}
    	else
    	{?>
    	Rejestracja
        <?php 
    	}?>
	</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#0" data-no="5">
	<?php
    if (isset($_SESSION['login']))
    {?>
    wyloguj
    <?php }
    else
    {?>
    Logowanie
    <?php 
    }?>
	</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#0" data-no="6">Kontakt</a>
</li>
</ul>
</div>                        
</div>
</nav>
            </div> 

            <ul class="cd-hero-slider">

                <!-- Page 1 Gallery One -->
                <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" style="text-align: center";>
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one" style="display:block">
                                    <div class="pudlo1-duze">
                                        <div class="glowna-1" id="petsdivcontainer1" 
                                            style="display: block;height:100vh;width:100vw;">
                                            <iframe id="petsdivcontainer1"></iframe> 
                                                <script type="text/javascript">
                                               var mypets=new ddajaxtabs("testowylik1", "petsdivcontainer1")
                                                mypets.setpersist(false)
                                                mypets.setselectedClassTarget("link")
                                                mypets.init()
                                                </script>
                                        </div>
                                        </div>
	                                      
	                                </div> 
	                            </div>
	                               									
                            </div>                                     
                           
                        </div>                                                    
                </li>

                <!-- Page 2 Gallery Two -->
            <li>                    
                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="2" data-page-type="gallery">
                        <div class="tm-img-gallery-container">
                            <div class="tm-img-gallery gallery-two">
                                <div  id="petsdivcontainer2" style="display: block;height:100vh;width:100vw;">
                                        <iframe id="petsdivcontainer2"></iframe>                       
                                            <script>
                                            var mypets=new ddajaxtabs("testowyklik2", "petsdivcontainer2")
                                            mypets.setpersist(false)
                                            mypets.setselectedClassTarget("link")
                                            mypets.init()
                                            </script>
                                            </div>
                                    </div>
                                </div>
                            </div>                                 
                        </div>
                                         
            </li>
            <!--<li>                    
                <div class="cd-full-width">
                    <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="2" data-page-type="gallery">
                        <div class="tm-img-gallery-container">
                            <div class="tm-img-gallery gallery-two">
                                
                                        jakis tekst
                                    </div>
                                </div>
                            </div>                                 
                        </div>
                                         
            </li>-->
            

                
				
                <!-- Page 4 FAQ -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-width tm-pad-b" data-page-no="3">

                            <div class="tm-about-page">
                            
                            	<div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Czym jest IMGISH?</h2>
                                                <p class="tm-text">IMGISH jest to strona stworzona w celu zaliczenia przedmiotu Inżynieria Oprogramowania.

												</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Dla kogo przeznaczona jest strona IMGISH?</h2>
                                                <p class="tm-text">Strona IMGISH jest dla wszystkich, którzy chcą dzielić się z innymi zdjęciami oraz opiniami na ich temat.</p>     
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Kto może dodawać zdjęcia oraz je komentować?</h2>
                                                <p class="tm-text">Dodawać oraz komentować zdjęcia może każdy kto jest zalogowany.</p>     
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Jakich zdjęć nie można zamieszczać na stronie?</h2>
                                                <p class="tm-text">Na stronie nie można zamieszczać zdjęć wulgarnych, obrażających inną osobę.</p>
                                            </div>
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding">
                                                <h2 class="tm-text-title">Miejsce na twoje pytanie.</h2>
                                                <p class="tm-text"></p>     
                                            </div>
                                        </div>
                                    </div>
                                </div>  

                                
                                
                                <div class="row tm-white-box-margin-b">
                                    <div class="col-xs-12">
                                        <div class="tm-flex">
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-textbox-padding">
                                                <h2 class="tm-text-title">Jaki jest limit zdjęć na koncie i czy można usuwać zdjęcia z konta?</h2>
                                                <p class="tm-text">Każde konto posiada limit 3 zdjęć, które może posiadać na swoim profilu w przyszłości limit ten może ulec zmianie.</p>
                                                <p class="tm-text">Autor możne w każdej chwili usunąć swoje zdjęcia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                                                   
                        </div>              
                    </div> 

                </li>
				<li>
					<div>
					<div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="4">
							<div class="rejestracja">  
							
								
								
								<?php
									if (isset($_SESSION['login']))
									{?>
                                       <div class="zakonto">
                                        
								<!--<div class="lewo" id="pettabs"> -->
								    
								    <!--
								<form class="form1">		    
							    <a href="Konto-uzytkownika.php" target="ramka" class="submit">Konto</a>
							    <br>
							    <a href="Zdjecia-uzytkownika.php" target="ramka" class="submit">Twoje Zdjęcia</a><br>
							    <a href="Ustawienia-uzytkownika.php" target="ramka" class="submit">Ustawienia</a><br>
							    </form>
							        -->
							    
							    
                                
                               <!-- <div id="pettabs" class="indentmenu">-->
                               <div class="lewo">
                                <!--<form class="form1">-->
                                <!--
                                <div id="pettabs" class="indentmenu">
                                <a href="external1.htm" rel="#iframe" class="selected">Tab 1</a>
                                <a href="external2.htm" rel="#iframe">Tab 2</a>
                                <a href="external3.htm" rel="#iframe">Tab 3</a>
                                <a href="external4.htm" rel="#iframe">Tab 4</a>
                            </div>
                            -->
                               <!-- </form>-->
                               
							
							
							<div id="pettabs" class="indentmenu" style="text-align:center;">
<a href="external1.htm" rel="#iframe" class="selected"><input type="submit" 
    value="Konto"
    style="text-align:center;"
    class="submit2"></a>
    
<a href="Zdjecia-uzytkownika.php" rel="#iframe" > <input type="submit" 
    value="Zdjęcia"
    style="text-align:center;"
    class="submit2" 
    style="width:10vw;"></a>
    
<a href="external3.php" rel="#iframe"> <input type="submit" value="Ustawienia" 
    style="text-align:center;"
    class="submit2"></a>
    
<a href="FAQ.php" rel="#iframe"> <input type="submit" value="Komentarze" 
    style="text-align:center;"
    class="submit2"></a>
</div>
							
							
							
							
							
							
								</div>
							
<div class="prawo" id="petsdivcontainer">
   






<script type="text/javascript">

var mypets=new ddajaxtabs("pettabs", "petsdivcontainer")
mypets.setpersist(false)
mypets.setselectedClassTarget("link")
mypets.init()

</script>
    </div>
<div class="prawo1" id="petsdivcontainer">
   <!--<iframe id="petsdivcontainer"></iframe>-->






<script type="text/javascript">

var mypets=new ddajaxtabs("pettabs", "petsdivcontainer")
mypets.setpersist(false)
mypets.setselectedClassTarget("link")
mypets.init()

</script>
    </div>


										
										
										
										</div>
										</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
									<?php } 
									else
									{ ?>
									<div class="main2">
									<p class="sign" align="center">Rejestracja</p>
									<form class="form1" method="POST" action="rejestracja.php" style="text-align:center;">
									<input class="un" type="text" align="center" name="login" placeholder="login">
									<input class="pass" type="password" align="center" name="haslo1" placeholder="haslo">
									<input class="pass" type="password" align="center" name="haslo2" placeholder="powtórz hasło">
									<input class="pass" type="mail" align="center" name="email" placeholder="e-mail">
									<input type="submit" value="Utwórz konto" name="rejestruj" class="submit" align="center">
									</form>
									</div>
										<?php
									}?>
								
								
								
								
								
								
								
							
							</div>
						</div>
					</div>
				</li>
				<li>
					<div>
					<div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="5">
							<div class="logowanie">  
							
								<div class="main">	
									
									
									
									<?php
									if (isset($_SESSION['login']))
									{
									//	if (isset($_SESSION['login']))
									//	{
									//	unset($_SESSION['login']);
									// ?>
									//	<script>object.reload(forcedReload);</script>
									//	<?php
									//	}
										
										    
										  
										
										
									}
									else
									{ ?>
									 <!-- header("Location: https://imgish.000webhostapp.com/"); -->
									<p class="sign" align="center">Logowanie</p>
										<?php
									if (isset($_SESSION['zlelogowanie']))
									{
									?>
									wpisano zle dane
									<?php 
									}
									?>
										<form class="form1" method="POST" action="logowanie.php" style="text-align:center;">
										<input class="un" type="text" align="center" name="login" placeholder="login">
										<input class="pass" type="password" align="center" name="haslo" placeholder="haslo">
										<!--<a class="submit" align="center" name="loguj"></a>-->
										<input type="submit" value="Zaloguj" name="loguj" class="submit" align="center">
										</form>
										<!--
										<p class="forgot" align="center"><a href="#">Forgot Password?</p>
										-->
									<?php
									}?>
									
									
									
									
									
									
									
									
									
										
										
									
								</div>
							</div>
						</div>
					</div>
				</li>

                <!-- Page 5 Contact Us -->
                <li>
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content tm-page-pad" data-page-no="6">
                            <div class="tm-contact-page">                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="tm-flex tm-contact-container">                                
                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">Feel free to say Hi!</h2>
                                                <p class="tm-text">Nulla sed urna at ligula maximus blandit. Mauris nisi ligula, ultricies ac diam id, hendrerit tincidunt ipsum. Maecenas non massa justo.</p>                                                
                                                
                                                <!-- contact form -->
                                                <form action="index.html" method="post" class="tm-contact-form">

                                                    <div class="form-group">
                                                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                                    </div>
                                        
                                                    <div class="form-group">                                                        
                                                        <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                                    </div>                                                        
                                                    
                                                    <div class="form-group">
                                                        <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                                    </div> 

                                                    <button type="submit" class="pull-xs-right tm-submit-btn">Send</button>  
                                                
                                                </form>  
                                            </div>

                                            <div class="tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact">
                                                <h2 class="tm-contact-info">4466 Old New St 28290, SF, California</h2>
                                                  
                                                <div id="google-map"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>    

                        </div>
                        
                    </div> <!-- .cd-full-width -->
                </li>
				
            </ul> <!-- .cd-hero-slider -->
            
            <footer class="tm-footer">
            
                <div class="tm-social-icons-container text-xs-center">
                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
              </div>
                
                <p class="tm-copyright-text">Imgish <span class="tm-copyright-year">2020</span> projekt na zaliczenie IO
                

            </footer>
                    
        </div> <!-- .cd-hero -->
        

        <!-- Preloader, https://ihatetomatoes.net/create-custom-preloading-screen/ -->
        <div id="loader-wrapper">
            
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
        
        <!-- load JS files -->
        
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
				
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });

                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
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
        
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');

                // Write current year in copyright text.
                $(".tm-copyright-year").text(new Date().getFullYear());
                           
            });

            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 13,
                    center: new google.maps.LatLng(37.779724, -122.452152),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {   
                loadGoogleMap(); // Google Map
            });

        </script>            

</body>
</html>