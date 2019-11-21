
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

        exit('a');
        
    } else {
        
        //Store user Subscribe Email
        
        $sqli1 = "INSERT INTO userSubscribe (id, email) VALUES (NULL,'". $_POST['email'] ."');";
        
        if(mysqli_query($conn, $sqli1)) {
            
            //Successfully Registered
            
            header('location: HomePage.php');
            exit();
            
        }
    }
    header('location: HomePage.php');
}


?>

<!----=============================================== End of PHP Code ================================================== ---

<!DOCTYPE html>
<html lang="en">
<head>

<!----===================== Basic That A Page Needed ========================== --->

<title>E-DriveThru Vending Home Page</title>

<!----=================== Mobile Phone Specific Meta's ======================== --->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!----================ Bootstrap Cascading Style Sheet (CSS) ================== --->
        
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" href="ccs/open-iconic-bootstrap.min.css">
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
<link rel="stylesheet" href="css/style.css" media="screen">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen">


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
       <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-person"></span><?php echo $_SESSION['username']; ?></a>

<div class="dropdown-menu" aria-labelledby="dropdown06">
       <a class="dropdown-item" href="Login.php">Login</a>
       <a class="dropdown-item" href="SignUp.php">Sign Up</a>
       <a class ="dropdown-item" href="Logout.php">Log out</a>
       
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


<!--- ====================================== End of Navigation ========================================= --->

<!--- =========================== Start Carousel =============================== --->

     
<section id="home-section" class="hero">
<div class="home-slider owl-carousel">

<!--- ****************************** First Slide ********************************* --->

<div class="slider-item" style="background-image: url(image/kitkat.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

<div class="col-md-12 ftco-animate text-center">
    <h1 class="mb-2">Have KitKat and chill your day</h1>
    <h2 class="subheading mb-4">Just place your order and grab it at chosen vending!</h2>
    <p><a href="Snacks.php" class="btn btn-primary">I want to Grab it</a></p>
</div>

</div>
</div>
</div>

<!--- ****************************** Second Slide ********************************* --->

<div class="slider-item" style="background-image: url(image/colamix.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

<div class="col-sm-12 ftco-animate text-center">
    <h1 class="mb-2">Drain out of energy? Get a Drink Now!</h1>
    <h2 class="subheading mb-4">Gain Your Energy Back</h2>
    <p><a href="Beverages.php" class="btn btn-primary">I want it!</a></p>
</div>

</div>
</div>
</div>

<!--- ****************************** Third Slide ********************************* --->
     
 <div class="slider-item" style="background-image: url(image/candrinks.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

<div class="col-sm-12 ftco-animate text-center">
    <h1 class="mb-2">Drain out of energy? Get a Drink Now!</h1>
    <h2 class="subheading mb-4">Gain Your Energy Back</h2>
    <p><a href="Beverages.php" class="btn btn-primary">I want it!</a></p>
</div>

</div>
</div>
</div>

<!--- ****************************** Fourth Slide ********************************* --->
     
 <div class="slider-item" style="background-image: url(image/dasanisparkling.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

<div class="col-sm-12 ftco-animate text-center">
    <h1 class="mb-2">Drain out of energy? Get a Drink Now!</h1>
    <h2 class="subheading mb-4">Gain Your Energy Back</h2>
    <p><a href="Beverages.php" class="btn btn-primary">I want it!</a></p>
</div>

</div>
</div>
</div>
</div>

</section>

<!--- ============================================= FTCO First Section ===================================================== --->

<section class="ftco-section">
<div class="container">
<div class="row no-gutters ftco-services">


<!--- ****************************** First Icon *************************************** --->     
<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
<div class="media block-6 services mb-md-0 mb-4">
<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
     <span class="flaticon-award"></span>
</div>
<div class="media-body">
     <h3 class="heading">QR Code Scan</h3>
     <span>Scan your QR Code at the vending machine to have your product</span>
</div>
</div>      
</div>

<!--- ****************************** Second Icon *************************************** --->
     
<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
<div class="media block-6 services mb-md-0 mb-4">
<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
     <span class="flaticon-customer-service"></span>
</div>
<div class="media-body">
     <h3 class="heading">Support</h3>
     <span>24/7 Support If You Are Facing Any Problem</span>
</div>
</div>      
</div>

<!--- ****************************** Third Icon *************************************** --->     
<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
<div class="media block-6 services mb-md-0 mb-4">
<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
     <span class="flaticon-award"></span>
</div>
<div class="media-body">
     <h3 class="heading">Variety Vending</h3>
     <span>Choose your vending and easily place your order!</span>
</div>
</div>      
</div>

<!--- ****************************** Fourth Icon *************************************** --->
     
<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
<div class="media block-6 services mb-md-0 mb-4">
<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
     <span class="flaticon-customer-service"></span>
</div>
<div class="media-body">
     <h3 class="heading">Live Chat</h3>
     <span>24/7 Real time Customer Service Support </span>
</div>
</div>      
</div>


</div>

</div>
</section>

<!--- ============================================= End of First Section ===================================================== --->

<!--- ============================================= FTCO Second Section ===================================================== --->
<section class="ftco-section ftco-category ftco-no-pt">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="row">
     
     
<div class="col-md-6 order-md-last align-items-stretch d-flex">
<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(image/vendingcust.jpg);">
<div class="text text-center">
     <h2>E-DriveThru Vending</h2>
     <p>Just DriveThru and grab It</p>
     <p><a href="shop.php" class="btn btn-primary">Shop now</a></p>
</div>
</div>
</div>

<div class="col-md-6">
<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(image/dasanisparkling.jpg);">
<div class="text px-3 py-1">
     <h2 class="mb-0"><a href="Others.php">Drinking Water</a></h2>
</div>
</div>
     
<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(image/kitkat.jpg);">
<div class="text px-3 py-1">
     <h2 class="mb-0"><a href="Snacks.php">Chocolate</a></h2>
</div>
</div>
</div>
</div>
</div>


<div class="col-md-4">
<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(image/cheetos4.png);">
<div class="text px-3 py-1">
     <h2 class="mb-0"><a href="Snacks.php">Snacks</a></h2>
</div>		
</div>
     
<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(image/colamix.jpg);">
<div class="text px-3 py-1">
     <h2 class="mb-0"><a href="Beverages.php">Beverages</a></h2>
</div>
</div>
</div>
</div>
</div>
</section>

<!--- ============================================= End of Second Section ===================================================== --->

<!--- ============================================= FTCO Third Section ===================================================== --->
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center mb-3 pb-3">
<div class="col-md-12 heading-section text-center ftco-animate">
     <h2 class="mb-4">Our Products</h2>

</div>
</div>   		
</div>


<!--- ****************************** First Row *************************************** --->
<div class="container">
<div class="row">
<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="" class="img-prod" data-target="#modalQuickView" onclick="onclick(this)"><img class="img-fluid" src="image/lychee.png" alt="F&N Lychee ">
     <span class="status">20%</span>
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">F&N Lychee 2</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="mr-2 price-dc">RM5.50</span><span class="product-price">RM4.40</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_fn_Lychee" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="fn_Lychee" product="F&N Lychee 2" sel="4.40">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>


<!--- ****************************************  2 Container *********************************** --->

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/soda.png" class="img-prod"><img class="img-fluid" src="image/soda.png" alt="F&N Soda">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">F&N Club Soda</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM2.50</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_fn_soda" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="fn_soda" product="F&N Club Soda" sel="4.40">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>

<!--- **************************************** 3 Container *********************************** --->


<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="#" class="img-prod"><img class="img-fluid" src="image/ori.png" alt="Perrier Drinking Water">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
          <h3 class="product-title">Perrier Mineral Water</a></h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM3.60</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_ayambakar" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="ayambakar" product="Maggi Ayam Bakar" sel="3.60">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>


<!--- **************************************** 4 Container *********************************** --->

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/ranger.png" class="img-prod"><img class="img-fluid" src="image/ranger.png" alt="F&N Ranger Drink">

<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">F&N Ranger</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM2.50</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_fn_ranger" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="fn_ranger" product="F&N Ranger" sel="2.0">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>


<!--- ************************************ Second Row ******************************************** --->
<!--- **************************************** 5 Container *********************************** --->

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
     <p class="price"><span class="mr-2 price-dc">RM4.00</span><span class="product-price">RM2.00</span></p>
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


<!--- ****************************************  6 Container *********************************** --->


<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/cheese.png" class="img-prod"><img class="img-fluid"  src="image/cheese.png" alt="Samyang Chicken Cheese">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Ramen Hot Cheese</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM7.00</span></p>
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

<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="image/roasted.png" class="img-prod"><img class="img-fluid"  src="image/roasted.png" alt="Maggi Instant Roasted">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Maggi Roasted</h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM3.60</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_roasted" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="roasted" product="Maggi Roasted" sel="3.60">
     <span><i class="ion-ios-cart"></i></span>
     </button>

</div>
</div>
</div>
</div>
</div>


<div class="col-md-6 col-lg-3 grid-item ftco-animate">
<div class="product">
     <a href="#" class="img-prod"><img class="img-fluid" src="image/cheetos2.png" alt="Cheetos Crunchy Flamin ">
<div class="overlay"></div>
     </a>
    
<div class="text py-3 pb-4 px-3 text-center">
     <h3 class="product-title">Cheetos Flamin</a></h3>
<div class="d-flex-center">
<div class="product-price">
     <p class="price"><span class="product-price">RM4.00</span></p>
</div>
</div>
     
<div class="bottom-area d-flex px-3">
<div class="m-auto d-flex">
    
<div class="quantity-input">
    <input class="minus btn d-flex justify-content-center align-items-center mx-1" type="button" value="-">
    <input id="text_c-flamin" value="1" class="input-text qty text" size="4"/>
    <input class="plus btn d-flex  align-items-center mx-1" type="button" value="+">
</div>
      
     <button class="btn btn-success add-to-cart-button " rel="c-flamin" product="Cheetos Crunchy Flamin" sel="4.00">
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

<!--- ============================================= End of Third Section ===================================================== --->

<!--- =============================================  FTCO Fourth Section  =======================================================--->

<section class="ftco-section img" style="background-image: url(image/whitecan.jpg);">
<div class="container">
<div class="row justify-content-end">
<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate text-center">
     <span class="subheading">Place your order now on your favourite snacks and beverages that you want</span>
     <h2 class="mb-4">Deal of the day</h2>
     <h3><a href="#">Jumbo Snacks</a></h3>
            <span class="price">RM6.00 <a href="#">now RM4.00 only</a></span>
<div id="timer" class="d-flex mt-5 ">
<div class="time" id="days"></div>
<div class="time pl-3" id="hours"></div>
<div class="time pl-3" id="minutes"></div>
<div class="time pl-3" id="seconds"></div>
</div>
</div>
</div>   		
</div>

</section>


<!--- ============================================= End of Fourth Section ===================================================== --->

<!--- ================================================   Review Section   ======================================================--->
<section class="ftco-section testimony-section">
<div class="container">
<div class="row justify-content-center mb-5 pb-3">
<div class="col-md-7 heading-section ftco-animate text-center">
     <span class="subheading">Review</span>
     <h2 class="mb-4">Our satisfied customer says</h2>
</div>
</div>
     
<div class="row ftco-animate">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel">
     

<!--- ************************************ Review 1 ******************************************** --->
<div class="item">
<div class="testimony-wrap p-4 pb-5">
<div class="user-img mb-5" style="background-image: url(image/jongsuk.jpg)">
     <span class="quote d-flex align-items-center justify-content-center">
     <i class="icon-quote-left"></i>
     </span>
</div>
     
<div class="text text-center">
     <p class="mb-5 pl-4 line">Very Good</p>
     <p class="name">Jong Suk</p>
     <span class="position">Student</span>
</div>
</div>
</div>
 
<!--- ************************************ Review 2 ******************************************** --->
<div class="item">
<div class="testimony-wrap p-4 pb-5">
<div class="user-img mb-5" style="background-image: url(image/jackson.jpg)">
     <span class="quote d-flex align-items-center justify-content-center">
     <i class="icon-quote-left"></i>
     </span>
</div>

<div class="text text-center">
     <p class="mb-5 pl-4 line">Very Good!</p>
     <p class="name">Jackson W</p>
     <span class="position">Singer</span>
</div>
</div>
</div>

<!--- ************************************ Review 3 ******************************************** --->
     
<div class="item">
<div class="testimony-wrap p-4 pb-5">
<div class="user-img mb-5" style="background-image: url(image/iu.png)">
     <span class="quote d-flex align-items-center justify-content-center">
     <i class="icon-quote-left"></i>
     </span>
</div>
     
     
<div class="text text-center">
     <p class="mb-5 pl-4 line">Very nice!</p>
     <p class="name">Iu</p>
     <span class="position">Actress</span>
</div>
</div>
</div>

<!--- ************************************ Review 4 ******************************************** --->

<div class="item">
<div class="testimony-wrap p-4 pb-5">
<div class="user-img mb-5" style="background-image: url(image/ruel.jpg)">
     <span class="quote d-flex align-items-center justify-content-center">
     <i class="icon-quote-left"></i>
     </span>
</div>
<div class="text text-center">
     <p class="mb-5 pl-4 line">Impressive!</p>
     <p class="name">Ruel One</p>
     <span class="position">Student</span>
</div>
</div>
</div>

<!--- ************************************ Review 5 ******************************************** --->
<div class="item">
<div class="testimony-wrap p-4 pb-5">
<div class="user-img mb-5" style="background-image: url(image/iu1.png)">
     <span class="quote d-flex align-items-center justify-content-center">
     <i class="icon-quote-left"></i>
     </span>
</div>
     
<div class="text text-center">
     <p class="mb-5 pl-4 line">Superb!</p>
     <p class="name">Iu Luna</p>
     <span class="position">Student</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!--- ============================================= End of Review Section ===================================================== --->

<!--- ============================================= Vending Partner ===========================================--->

<section class="ftco-section ftco-partner">
<div class="container">
<div class="row">
<div class="col-sm ftco-animate">
    <a href="Beverages-Deals.php" class="partner"><img src="image/tcn.png" class="img-fluid" alt="Atlas Vending"></a>
</div>
     
<div class="col-sm ftco-animate">
    <a href="Noodles.php" class="partner"><img src="image/yokai.jpg" class="img-fluid" alt="Vending"></a>
</div>
     
<div class="col-sm ftco-animate">
     <a href="shop.php" class="partner"><img src="image/Atlas.png" class="img-fluid" alt="Vending"></a>
</div>

<div class="col-sm ftco-animate">
    <a href="Beverages.php" class="partner"><img src="image/vending.jpg" class="img-fluid" alt="Vending"></a>
</div>

<div class="col-sm ftco-animate">
    <a href="Snacks.php" class="partner"><img src="image/express.jpg" class="img-fluid" alt="Vending"></a>
</div>
</div>
</div>
     
</section>

<!--- ============================================= End of Vending Partner ===================================================== --->

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



<!--- ================================================== Start LiveChat Code ============================================================= --->

<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11413478;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/11413478/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>

<!--- ================================================== End of LiveChat Code ============================================================= --->

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
