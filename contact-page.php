<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Exodus - Vintage HTML Template</title>
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
    </head>
    <body class="white">
        
        <!-- Main Content Starts -->
        <?php include('header.php') ?>
        
        <!-- Section -->
        <div id="about" class="section no-padding"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087" width="100%" height="500" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- Section Ends -->
        
        <!-- Section -->
        <div id="contact" class="section white center">
            <div class="container">
                <h5 class="t-black">CONTACT US</h5>
                <span class="line gold"></span>
                <h2 class="mt-20">Let's <span class="t-gold">Talk</span></h2>
                <h6 class="center">Fill the form below and let us know how can we help you.</h6>
                <div id="fields">
                    <!-- CONTACT Form-->
                    <form id="contact-form" method="POST" action="php/contact.php">
                        <div class="controls center">
                            <div id="note" class="messages t-dark"></div>
                            <div class="input-item half form-group">
                                <input id="form_email" type="email" name="email" class="form-control half light-grey" placeholder="Email address*" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="input-item half form-group">
                                <input id="form_name" type="text" name="name" class="form-control half light-grey" placeholder="Your Name*" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="input-item form-group">
                                <textarea id="form_message" name="message" rows="4" class="form-control light-grey" placeholder="Your Message*" required="required" data-error="Message is required."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <input type="submit" name="submit" id="submit" class="primary-btn m-20 large black t-white" value="Send">
                        </div>
                    </form><!-- END CONTACT Form-->
                </div>
            </div>
        </div><!-- Section Ends -->
        
        <!-- Section -->
        <div class="section back five">
            <div class="container center">
                <h5 class="t-white">stay connected</h5>
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