
<!----=============================================== Start PHP Code ================================================== --->    
    
<?php 

session_start();

$conn = mysqli_connect('localhost','root','root');

mysqli_select_db($conn, 'edrivethruvending');

//Check For Submission
if(isset($_POST['submit'])){

    
    $conn = NULL;
    $error = false;
    
    if($conn = mysqli_connect('localhost','root','root','edrivethruvending')) {
        if($result = mysqli_query($conn,$sql)) {
            if(mysqli_num_rows($result) == 1) {
                $error = true;
                
            }
        }
    }
    
    if($error) {
        
        //Username is Exists
        exit('a');
        
    } else {
        
        //Store User Credentials Details
        
        $sqli1 = "INSERT INTO userSubscribe (id, email) VALUES (NULL,'". $_POST['email'] ."');";
        
        if(mysqli_query($conn, $sqli1)) {
            
            //Successfully Registered
            
            header('location: ProductDesc.php');
            exit();
            
        }
    }
    header('location: ProductDesc.php');
}

?>

<!----=============================================== End of PHP Code ================================================== --->



<!DOCTYPE html>
<html lang="en">
<head>
       
<!----===================== Basic That A Page Needed ========================== --->

<title>E-DriveThru Vending Product Details</title>

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
       <a class="dropdown-item" href="ProductDesc.php">Single Product</a>
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
       <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-person"></span>My Account</a>

<div class="dropdown-menu" aria-labelledby="dropdown06">
       <a class="dropdown-item" href="Login.php">Login</a>
       <a class="dropdown-item" href="SignUp.php">Sign Up</a>
       
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

<!--- ======================================   Hero Part  ==================================== --->
<div class="hero-wrap hero-bread" style="background-image: url('image/bg4.jpg');">
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 ftco-animate text-center">
    <p class="breadcrumbs"><span class="mr-2"><a href="HomePage.php">Home</a></span> <span class="mr-2"><a href="Product-Desc.php">Product Single</a></span></p>
     <h1 class="mb-0 bread">Product Detail</h1>
</div>
</div>
</div>
</div>


<!--- ====================================== End of Hero Part  ==================================== --->


<!--- ======================================   Snack & Beverage Detail  ==================================== --->

<section class="ftco-section">
<div class="container">
<div class="row">
<div class="col-lg-6 mb-5 ftco-animate">
     <a href="image/cheetos1.png" class="image-popup"><img src="image/cheetos1.png" class="img-fluid" alt="Cheetos Crunchy Cheese"></a>
</div>
     
<div class="col-lg-6 product-details pl-md-5 ftco-animate">
     <h3>Cheetos Crunchy Cheese</h3>
<div class="rating d-flex">
    
     <p class="text-left mr-4">
     <a href="#" class="mr-2">5.0</a>
     <a href="#"><span class="ion-ios-star"></span></a>
     <a href="#"><span class="ion-ios-star"></span></a>
     <a href="#"><span class="ion-ios-star"></span></a>
     <a href="#"><span class="ion-ios-star"></span></a>
     <a href="#"><span class="ion-ios-star-outline"></span></a>
     </p>
     
     <p class="text-left mr-4">
     <a href="#" class="mr-2" style="color: #fff;">100 <span style="color: #f33866;">Rating</span></a>
     </p>
     
     <p class="text-left">
     <a href="#" class="mr-2" style="color: #fff;">500 <span style="color: #f33866;">Sold</span></a>
     </p>
     </div>
     
     <p class="price" style="color:white" ><span>MYR4.00</span></p>
     <h6>Bring a cheesy, delicious crunch to snack time with a bag of CHEETOS® Crunchy Cheese-Flavored Snacks. Made with real cheese for maximum flavor.
     </h6>
     
<div class="row mt-4">
<div class="col-md-6">
<div class="form-group d-flex">
<div class="select-wrap">

</div>
</div>
</div>
     
     <p><a href="cart.html" class="btn btn-black py-3 px-5">Add to Cart</a></p>
</div>
</div>
</div>
</section>


<!--- ======================================   End of Snack & Beverage Detail  ==================================== --->


<!--- ======================================   Related Snack & Beverage Section  ==================================== --->

<section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-3 pb-3">
<div class="col-md-12 heading-section text-center ftco-animate">
     <span class="subheading">Snack & Beverage</span>
     <h2 class="mb-4">Related Snack & Beverage</h2>
     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
</div>
</div>   		
</div>     
     

<div class="row">
     
<!--- ************************************ First Container ******************************************** --->
<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/choco.jpg" class="img-prod"><img class="img-fluid" src="image/choco.jpg" alt="Mix Snacks">
     <span class="status">30%</span>
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Mix Snacks</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="mr-2 price-dc">MYR4.00</span><span class="product-price">MYR2.00</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_mixsnack" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="mixsnack" product="Mix Snacks" sel="2.00">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>

<!--- ##################################### End of Container 1 icon #################################### --->

<!--- ************************************ Second Container ******************************************** --->

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/tostitos.png" class="img-prod"><img class="img-fluid" src="image/tostitos.png" alt="Tostitos">

<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Taco Tostitos</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">MYR4.00</span></p>
</div>
</div>     

<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_tostitos" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="tostitos" product="Taco Tostitos" sel="4.00">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>

<!--- ************************************ Third Container ******************************************** --->

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/cheese.png" class="img-prod"><img class="img-fluid"  src="image/cheese.png" alt="Samyang Chicken Cheese">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Ramen Hot Cheese</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">MYR7.00</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_hotcheese" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="hotcheese" product="Ramen Hot Cheese" sel="7.00">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>

<!--- ##################################### End of Container 3 icon #################################### --->

<!--- ************************************ Fourth Container ******************************************** --->

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/chesnut.png" class="img-prod"><img class="img-fluid" src="image/chesnut.png" alt="Season Water Chesnut">
          
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Season Chesnut</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">MYR2.00</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_chesnut" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="chesnut" product="Season Chesnut" sel="2.00">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--- ##################################### End Of Container 3 icon #################################### --->   

<!--- ======================================   End of Snack & Beverage Section  ==================================== --->

<!--- ====================================== Subscribe Newsletter Section ========================================= --->
<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-danger">

    
<div class="modal fade" id="modalSubscriptionForm"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header text-center bg-danger" >


    <h5 class="modal-title w-100 font-weight-bold">Want a Special Deals & Promotion Codes? Subscribe With Us Now!</h5>

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="modal-body mx-3 ">
<div class="md-form mb-4">
        
    <br>
    
<form name="subscribeForm" onsubmit="return validateForm()" method="post" class="subscribe-form justify-content-center bg-light">

     <label style="color:black">Email Address</label>
     <input type="text" name="email" class="form-control" style="border-color: black"  placeholder="Enter email address">

<div class="error" id="emailErr"></div>
</div>

<div class="d-flex-center">
</div>
</div>
    
    <button type="submit" name="submit" class="btn btn-red align-items-center" value=" ">Subscribe Now! </button>
    
</div>
</div>
</div>

<div class="d-flex-center text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" style="border: 2px solid black" style="color: white" data-toggle="modal" data-target="#modalSubscriptionForm">Subscribe Now</a>
</div>
    
</section>
<!--- ====================================== End of Subscribe Newsletter Section ========================================= --->


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
     <h2 class="ftco-heading-2">E-Vending</h2>
     <p>Ease ur shops</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
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


<!--- ================================================== End of Script's Source File  ============================================================ --->

</body>
</html>
