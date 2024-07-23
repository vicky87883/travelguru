<?php
require_once('dbcon.php');
$query = "SELECT * FROM `travelblog` ORDER BY id DESC LIMIT 15";
$result = mysqli_query($con,$query);
?>
<?php include "script.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>TravelGuru - Let's travel the world</title>
        <meta name="description" content="Explore the world with travelguru! Discover the best travel guides, tips, and destination insights to make your next adventure unforgettable. Your ultimate resource for travel inspiration and planning.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="travelguru,traveling,tips,travel-guide,world,Travelguru,Travelguy,">
        <meta name="Resource-type" content="Document">
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
        <!-- Upload Font "https://fonts.google.com/" -->
        <link href="../../css?family=Montserrat:100,200,300,400,600,700&display=swap" rel="stylesheet">
        <link href="../../css-1?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Styles CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/az-styles.css">
        <!-- Load Font Awesome Kit -->
        <script src="../../747940bb1c.js"></script>
        <!-- Load Animate CSS -->
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- Load AOS CSS -->
        <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel=canonical href=https://www.travelguru.world/ />

        <!-- Slick Slider CSS -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6958761602872755"
     crossorigin="anonymous"></script>
     <!-- Google tag (gtag.js) -->
      
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9V32PPHD66"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9V32PPHD66');
</script>
<style>.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 20px 0;
}

.pagination button {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  margin: 0 5px;
  cursor: pointer;
}

.pagination button:hover {
  background-color: #45a049;
}

.pagination span {
  margin: 0 10px;
  font-size: 18px;
}
</style>
    </head>
    <body class="white">
        
        <!-- Main Content Starts -->
        <?php include('header.php') ?>
        
        <!-- Section -->
        <div id="home" class="white"> 
            <div class="content center">
                <!-- SLIDER-->
                <!-- Carousel Container -->
                <div class="slider-container">
                    <div id="slide-item" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slider Navigation -->
                            <ol class="carousel-indicators">
                                <li data-target="#slide-item" data-slide-to="0" class="active white"></li>
                                <li data-target="#slide-item" data-slide-to="1" class="white"></li>
                                <li data-target="#slide-item" data-slide-to="2" class="white"></li>
                            </ol>

                            <!-- Slide -->
                            <div class="carousel-item active">
                               <div class="img-container slide five">  
                                    <div class="content-box">
                                        <div class="content-data">
                                            <h5 class="t-white">Breath-taking views</h5>
                                            <span class="line gold"></span>
                                            <div class="display t-white" data-aos="fade-down" data-aos-anchor-placement="center-bottom">Experience <span class="ft-word">epic</span> beauty</div>
                                            <a href="promo-page.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="primary-btn no-bg large border-2 b-white white t-white">Explore</a>
                                        </div>
                                    </div>
                                   <div class="gradient-overlay op-5"></div>
                                </div>
                            </div>
                            
                            <!-- Slide -->
                            <div class="carousel-item">
                               <div class="img-container slide two">  
                                    <div class="content-box">
                                        <div class="content-data">
                                            <h5 class="t-white">magical desert</h5>
                                            <span class="line gold"></span>
                                            <div class="display t-white" data-aos="fade-down" data-aos-anchor-placement="center-bottom">Deep <span class="ft-word">inside</span> the Sahara</div>
                                            <a href="#promo" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="primary-btn large border-2 b-brick dark-burgundy t-white">View 30% off Promotion</a>
                                        </div>
                                    </div>
                                   <div class="gradient-overlay op-5"></div>
                                </div>
                            </div>
                            
                            <!-- Slide -->
                            <div class="carousel-item">
                               <div class="img-container slide three">  
                                    <div class="content-box">
                                        <div class="content-data">
                                            <h5 class="t-white">misty mountains</h5>
                                            <span class="line white"></span>
                                            <div class="display t-white" data-aos="fade-down" data-aos-anchor-placement="center-bottom">Amazing <span class="ft-word">Scotland</span></div>
                                            <a href="promo-detail.php" data-aos="fade-up" data-aos-anchor-placement="center-bottom" class="primary-btn light-blue large t-dark-clay">discover now</a>
                                        </div>
                                    </div>
                                   <div class="gradient-overlay op-5"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Section Ends -->
     <?php include('midsection.php') ?>
        <div class="container"><div class="break-line gold op-3"></div></div>
        <div class="section back four"> 
            <div class="container center"> 
                <div class="banner white square">
                    <h5 class="t-gold">NEWSLETTER</h5>
                    <span class="line black"></span>
                    <h2 class="t-black">Don't <span class="t-gold">miss</span> it!</h2>
                    <h6 class="center">Subscribe to our newsletter for special promotions & cool updates.</h6>
                    <div id="fields">
                        <form id="contact-form" method="POST" action="php/contact.php">
                            <div id="note" class="messages t-dark"></div>
                            <div class="controls center newsletter">
                                <div class="form-group">
                                    <div class="input-item form-group">
                                        <input id="form_email" type="email" name="email" class="form-control light-grey" placeholder="Email address*" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <input type="submit" name="submit" id="submit" class="primary-btn large square-bl square-tl black t-snow" value="Send">
                                </div>
                            </div>
                        </form><!-- END CONTACT Form-->
                    </div>
                </div>
                    <h5 class="t-black mt-100">stay connected</h5>
                    <span class="line gold "></span>
                    <div class="social-container m-20 center">
                        <a href="" class="primary-btn white icon t-gold"><i class="fab fa-facebook-square"></i></a>
                        <a href="" class="primary-btn white icon t-gold"><i class="fab fa-instagram"></i></a>
                        <a href="" class="primary-btn white icon t-gold"><i class="fab fa-linkedin"></i></a>
                    </div>
            </div>
        </div><!-- Section Ends -->
            <?php include('footer.php') ?>
        <script src="js/jquery-3.4.1.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/validator.min.js"></script>
        <script src="js/contact.js"></script> 
        <script src="js/main.js"></script>
        <script src="js/aos.js"></script>
    </body>
</html>