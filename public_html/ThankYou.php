<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
       
<!----===================== Basic That A Page Needed ========================== --->

<title>E-DriveThru Vending Thank You Page</title>

<!----=================== Mobile Phone Specific Meta's ======================== --->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!----================ Bootstrap Cascading Style Sheet (CSS) ================== --->
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap">
  


<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
    
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>


<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<link rel="stylesheet" href="css/ShopCart.css">



</head>

<body class="goto-here">

<!--- =========================== Upper Navigation ============================ --->
<div class="py-1 bg-color-1">
<div class="container">
<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
<div class="col-lg-12 d-block">
<div class="row d-flex">
<div class="col-md pr-4 d-flex topper align-items-center">
<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
     <span class="text">+49 111 9992222</span>
<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
     <span class="text">+04 4000444</span>
</div>
     
<div class="col-md pr-4 d-flex topper align-items-center">
<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
     <a href="mailto:edrivethruvending@email.com subject= subject text"><span class="text">edrivethruvending@email.com</span></a><span class="text">edrivethruvending@email.com</span>
</div>
     
     
     
    <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="https://www.instagram.com/?hl=en"><span class="icon-instagram"></span></a></li>

</div>
</div>
</div>
</div>
</div>
</div>



<!--- =========================== Second Navigation ============================ --->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-black ftco-navbar-light color-white" id="ftco-navbar">
<div class="container">
        <a class="navbar-brand" href="HomePage.php"><img src="image/driveThruLogo.png" height="70"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="oi oi-menu"></span> Menu
     </button>

<div class="collapse navbar-collapse" id="ftco-nav">
<ul class="navbar-nav ml-auto">
       <li class="nav-item active"><a href="HomePage.php" class="nav-link"><span class="icon-home"></span>Home</a></li>
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="Shop.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
    
<div class="dropdown-menu" aria-labelledby="dropdown04">
       <a class="dropdown-item" href="shop.php">Snack & Beverage</a>
       <a class="dropdown-item" href="wishlist.php">Wishlist</a>
       <a class="dropdown-item" href="ProductDesc.php">Product Details</a>
       <a class="dropdown-item" href="checkout.php">Checkout</a>
       <a class="dropdown-item" href="QR-Scan.php">QR Scan</a>
       
</div>
       </li>
      
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Deals</a>

<div class="dropdown-menu" aria-labelledby="dropdown05">
       <a class="dropdown-item" href="Snack-Deals.php">Snack Deals</a>
       <a class="dropdown-item" href="Beverages-Deals.php">Beverages Deals</a>
       <a class="dropdown-item" href="Special-Deals.php">Today's Specials</a>
 </div>
       </li>
       <li class="nav-item"><a href="Vending.php" class="nav-link">Vending</a></li>
       <li class="nav-item"><a href="About.php" class="nav-link">About</a></li>
       <li class="nav-item"><a href="ContactUs.php" class="nav-link">Contact Us</a></li>
       
       <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-person"></span><?php echo $_SESSION['username']; ?></a>

<div class="dropdown-menu" aria-labelledby="dropdown06">
       <a class="dropdown-item" href="Login.php">Login</a>
       <a class="dropdown-item" href="SignUp.php">Sign Up</a>
       <a class ="dropdown-item" href="Logout.php">Log out <?php echo $_SESSION['username']; ?></a>
       
</div>
       </li>
       
<!--- =========================== Mini Cart  ============================ --->

<div class="mini-cart">
    <button class="btn mini-cart-button"><span class="icon-shopping_cart"><span class="badge badge-notify shopping_cart-badge"></span></span></button>
</div>

<div class="mini-cart-container">
<div class="mini-cart-items">
<ul>
</ul>

<div class="mini-cart-totals">
<div id="total-price">
    <p>Total Price</p>
    <span> MYR0.00 </span>
</div>

<div id="total-items">
    <p>Total Items</p>
    <span> 0 </span>
</div>
</div>
</div>
</div>
       
        
</ul>
</div>
</div>
</nav>
<!--- ====================================== End of Navigation ========================================= --->



<div class="hero-wrap hero-bread text-center" style="background-image: url('image/bg4.jpg');">
    <h1 class="display-3 text-center">Thank You!</h1>
    <h5 class="lead text-center"><strong>Please get your QR Code at QR Code Page below </strong> in order to collect your snacks or beverages!</h5>
    <hr>
    <h5>
    Having trouble? <a href="ContactUs.php">Contact us</a>
    </h5>
    <p class="lead text-center">
    <a class="btn btn-primary btn-sm" href="QR-Scan.php" role="button">QR Code Page</a>
    </p>
</div>

<!--- ================================================= Footer Section =========================================================--->

<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row">
<div class="mouse">
     <a href="#" class="mouse-icon">
<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
     </a>
</div>
</div>
     
<div class="row mb-5">
<div class="col-md">
<div class="ftco-footer-widget mb-4">

          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
     
            <li class="ftco-animate"><a href="https://twitter.com"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="https://www.facebook.com"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="https://www.instagram.com/?hl=en"><span class="icon-instagram"></span></a></li>
          </ul>
</div>
</div>
     
<div class="col-md">
<div class="ftco-footer-widget mb-4 ml-md-5">
     <h2 class="ftco-heading-2">Menu</h2>
          <ul class="list-unstyled">
              <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
              <li><a href="Login.php" class="py-2 d-block">Login</a></li>
              <li><a href="About.php" class="py-2 d-block">About</a></li>
              <li><a href="ContactUs.php" class="py-2 d-block">Contact Us</a></li>
          </ul>
</div>
</div>
     
<div class="col-md-4">
<div class="ftco-footer-widget mb-4">
     <h2 class="ftco-heading-2">Help</h2>
<div class="d-flex">
          <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
            <li><a href="#" class="py-2 d-block">Shops Information</a></li>
            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
          </ul>
     
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">FAQs</a></li>
            <li><a href="ContactUs.php" class="py-2 d-block">Contact</a></li>
          </ul>
</div>
</div>
</div>


<!--- ====================================== Question Section ===========================================--->

<div class="col-md">
<div class="ftco-footer-widget mb-4">
     <h2 class="ftco-heading-2">Have a Questions?</h2>
<div class="block-23 mb-3">
         <ul>
          <li><span class="icon icon-map-marker"></span><span class="text">Gündelbacher Str. 16, 71665 Vaihingen an der Enz, Germany</span></li>
          <br>
          <li><a href="#"><span class="icon icon-phone"></span><span class="text">+49 111 9992222</span></a></li>
          
          <li><a href="#"><span class="icon icon-phone"></span><span class="text">+04 4000444</span></a></li>
          
          <li><a href="mailto:edrivethruvending@email.com subject= subject text"><span class="icon icon-envelope"></span><span class="text">edrivethruvending@gmail.com</span></a></li>
          </ul>
</div>
</div>
</div>
</div>
     
<!--- ============================================= End of Question Section ===================================================== --->

<!--- =================================================== Copyright   =============================================================--->

<div class="row">
<div class="col-md-12 text-center">
     <h7>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="" target="_blank">Nadhrah</a>
     </h7>
</div>
</div>
</div>
</footer>

<!--- =============================================  End of Copyright   ====================================================== --->

<!--- =================================================   End of Footer ====================================================== --->

<!--- ================================================== Loader  ============================================================= --->

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!--- ================================================== End of Loader  ======================================================= --->

<!----================================================= Script's Source File ================================================== --->
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
<script src="js/Login.js"></script>
<script src="js/ShopCart.js"></script>
<script src="js/Subscribe Part.js"></script>
<script src="js/bootstrap-show-password.js"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js'></script>


<!--- ================================================== End of Script's Source File  ============================================================ --->
    
</body>
</html>
