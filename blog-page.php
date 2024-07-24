<?php
require_once('dbcon.php');
$query = "SELECT * FROM `travelblog` ORDER BY id DESC LIMIT 15";
$result = mysqli_query($con,$query);
?>
<?php include "script.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title></title>
        <meta name="description" content="lancio, business, launch, app, product, template, design, modern, elegant">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="lancio, food, launch, app, product, template, design, modern, elegant">
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
        <!-- Slick Slider CSS -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
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
    </head>
    <body class="white">
        
        <!-- Main Content Starts -->
        <?php include('header.php') ?>
        
        <!-- Section -->
        <div id="about" class="section video"> 
                <div class="container"> 
                    <div class="content center mt-100">
                        <div class="breadcrumb t-white">
                            <a href="index.php" class="t-gold">Home</a> / Blog
                        </div>
                    </div>
                </div>
            <!-- Video Background -->
            <div class="video-back">
                <div class="color-overlay op-3"></div>
                <video class="back three img">
                </video>
            </div>
        </div><!-- Section Ends -->
        
        <!-- Section -->
        <div class="section white"> 
            <div class="container" id="posts"> 
                <div class="content center">
                    <div class="row text-justify mt-30">
                       <?php include('midsection.php') ?>
                    </div>
                </div>
            </div>
        </div><!-- Section Ends -->
        
        <!-- Section -->
        <div class="section back five">
            <div class="container center">
                <h5 class="t-black">stay connected</h5>
                <span class="line gold"></span>

                <div class="social-container m-20 center">
                    <a href="" class="primary-btn white icon t-gold"><i class="fab fa-facebook-square"></i></a>
                    <a href="" class="primary-btn white icon t-gold"><i class="fab fa-instagram"></i></a>
                    <a href="" class="primary-btn white icon t-gold"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div><!-- Section Ends -->
        
            <!-- Footer -->
            <?php include('footer.php') ?>
        
        <!-- JS files upload -->
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