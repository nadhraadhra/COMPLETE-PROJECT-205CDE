
<!----=============================================== Start PHP Code ================================================== --->    
    
<?php 

session_start();

$conn = mysqli_connect('localhost','root','root');

mysqli_select_db($conn, 'edrivethruvending');

//Check For Submission
if(isset($_POST['submit'])){
    
    //Modify
    
    //$sqli1 = "SELECT * FROM users WHERE username='". $_POST['username'] ."';";
    
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
        
        $sqli1 = "INSERT INTO users (userId, name, username, email, mobile, country, password, confirmPassword) VALUES (NULL,'". $_POST['name'] ."', '". $_POST['username'] ."', '". $_POST['email'] ."', '". $_POST['mobile'] ."', '". $_POST['country'] ."', '". $_POST['password'] ."', '". $_POST['confirmPassword'] ."');";
        
        if(mysqli_query($conn, $sqli1)) {
            
            //Successfully Registered
            
            header('location: Login.php');
            exit();
            
        }
    }
    header('location: SignUp.php');
}

?>

<!----=============================================== End of PHP Code ================================================== --->


<!DOCTYPE html>
<html lang="en">
<head>
       
<!----===================== Basic That A Page Needed ========================== --->

<title>E-DriveThru Vending Sign Up</title>

<!----=================== Mobile Phone Specific Meta's ======================== --->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!----================ Bootstrap Cascading Style Sheet (CSS) ================== --->
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
<link rel="stylesheet" href="/examples/css/form-style.css">

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


<!--- ======================================== Start Sign Up Form Section ============================================= --->


<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-black">
<div class="col-md-12 heading-section text-center ftco-animate">
     <h2 class="mb-4">Sign Up</h2>

</div>
    <form name="signupForm" onsubmit="return validateForm()" method="post">

    
<div class="input-group">
     <label>Name</label>
     <input type="text" name="name" value="">
<div class="error" id="nameErr"></div>
</div>       
    
<div class="input-group">
     <label>Username</label>
     <input type="text" name="username" value="">
<div class="error" id="usernameErr"></div>
</div>

<div class="input-group">
     <label>Email Address</label>
     <input type="text" name="email" value="">
<div class="error" id="emailErr"></div>
</div>

<div class="input-group">
     <label>Mobile Number</label>
     <input type="text" name="mobile" maxlength="12" value="">
     <div class="error" id="mobileErr"></div>
</div>

<div class="input-group">
     <label>Country</label>
     <select name="country" value="">
          <option>Select</option>
          <option>France</option>
          <option>Germany</option>
          <option>Italy</option>
          <option>Japan</option>
          <option>London</option>
          <option>Malaysia</option>
          <option>New Zealand</option>
          <option>Switzerland</option>
     </select>
     
<div class="error" id="countryErr"></div>
</div>

     
<div class="input-group">
     <label>Password</label>
     <input type="password" name="password" maxlength="25" data-toggle="password" value="">
     
<div class="error" id="passwordErr"></div>

</div>
     
<div class="input-group">
     <label>Confirm Password</label>
     <input type="password" name="confirmPassword" maxlength="25" data-toggle="password" value="">
     
<div class="error" id="confirmPasswordErr"></div>

</div>

    <br>
<div class="input-group">
    <button type="submit" name="submit" class="btn btn-red align-items-center" value="Insert">Sign Up </button>
</div>
    
    <br>
     
<div class="input-group">
    <button type="submit" onClick="window.location='HomePage.php';" name="cancel" class="btn btn-red align-items-center"> Cancel </button>
</div>

    <br><br>
    <h6 style="text-align: center">
        Already have an account? <a href="Login.php">Sign in</a>
    </h6>
    
</form>
</section>




<!--- ====================================== End of Sign Up ========================================= --->

<!--- ================================================= Footer Section =========================================================--->

<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row">

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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="js/Login.js"></script>
<script src="js/ShopCart.js"></script>
<script src="js/SignUp.js"></script>
<script src="js/bootstrap-show-password.js"></script>



<!--- ================================================== End of Script's Source File  ============================================================ --->
  

</body>
</html>