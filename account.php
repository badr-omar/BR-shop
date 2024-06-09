<?php
    session_start();

    if(!isset($_SESSION['logged_in'])){
    header('location:login.php');
    exit();
    }

    if(isset($_GET['logout'])){
            if(isset($_SESSION['logged_in'])){
                unset($_SESSION['logged_in']);
                unset($_SESSION['user_name']);
                unset($_SESSION['user_email']);
                header('location:login.php');

                exit;
            }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>online_shoping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="assets/img/logo.png" class="logo" alt=""></a>
        <a href="index.php"><img src="assets/img/rcaiot-logo.png"  alt=""></a>
        <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            <li id="account"><a href="login.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
            <li><a href="index.php"><img src="assets/img/neu-logo1.png" alt=""></i></a></li>

            <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
        </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-outdent" aria-hidden="true"></i>
        </div>
    </section>



    <section class="section-p1">
        <div class="row container max-auto">
        <p style="color: red;"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
        <p  ><h1 class ="text-center" style="color: green;"><?php if(isset($_GET['message'])){echo $_GET['message'];}?></h1></p>
            <div class="text-center  mt-6 pt-5 col-lg-12 col-md-12 col-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="max-auto">
                <div class="account-info">
                    <p>Name : <span><?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name']; }?></span></p>
                    <p>Email : <span><?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email']; }?></span></p>
                    <p><a href="account.php?logout=1" id="logout-btn">LogOut</a></p>
                </div>

            </div>
        </div>
    </section>




    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="assets/img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>Yakın Doğu Üniversitesi / Yakın Doğu Bulvarı Lefkoşa, KKTC</p>
            <p><strong>Phone:</strong> +966 540783130 </p>
            <p><strong>Hours:</strong> 10:00 -10:00, Mon-Sat </p>
            <div class="follow">
                <h4>follow us</h4>
                <div class="icon">
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.php">Contact us </a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="login.php">Sign In</a>
            <a href="cart.php">View cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My order</a>
            <a href="#"> Help </a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="assets/img/pay/app.jpg" alt="">
                <img src="assets/img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="assets/img/pay/pay.png" alt="">
        </div>


    </footer>
    <script src="assets/js/script.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
