
<?php

session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
       
<!----===================== Basic That A Page Needed ========================== --->

<title>E-DriveThru Vending Special Deals</title>

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
     <a href="mailto:edrivethruvending@email.com subject= subject text"><span class="text">edrivethruvending@email.com</span></a>
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
    <span> RM0.00 </span>
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

