<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> BR_shope</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script>window.aichatbotApiKey="3b40dfc6-7bfd-4e81-83e4-8f16bd535442"; window.aichatbotProviderId="f9e9c5e4-6d1a-4b8c-8d3f-3f9e9c5e46d1";</script><script src="https://script.chatlab.com/aichatbot.js" id="3b40dfc6-7bfd-4e81-83e4-8f16bd535442" defer></script>
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="assets/img/logo.png" class="logo" alt=""></a>
        <a href="index.php"><img src="assets/img/rcaiot-logo.png"  alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
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

    <section id="hero">
    <a href="index.php"><img src="assets/img/air-logo.png"  alt=""></a>
    <br><br><br><br><br>
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button><a href="shop.php">Shop Now</a></button>
    </section>

    <section id="feature" class="section-p1">

        <div class="fe-box">
            <img src="assets/img/features/f1.png" alt="">
            <h6>Free shipping</h6>
        </div>

        <div class="fe-box">
            <img src="assets/img/features/f2.png" alt="">
            <h6>Save Time</h6>
        </div>

        <div class="fe-box">
            <img src="assets/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="assets/img/features/f4.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="assets/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>

        <div class="fe-box">
            <img src="assets/img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>

    <section id="products1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Colection New Morden Design</p>


        <div class="pro-container">

        <?php  include("server/get_products.php"); ?>
        <?php while($row = $feaatured_products->fetch_assoc()){?> 

            <div class="pro" onclick="window.location.href='sproduct.php?product_id=<?php echo $row['product_id']; ?>'";>
                <img src="assets/img/Products/<?php echo $row['product_image']; ?>" alt="">
               <div class="des">
                    <span>adidas</span>
                    <h5><?php echo $row['product_name']; ?> </h5>
                    <div class="star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h4><?php echo $row['product_price']; ?> TL</h4>
                </div>
                <a class="add-cart cart1" href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
            </div>
            <?php } ?>

        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to<span> 70% Off</span>-All t-Shirt & Accessories</h2>
        <button   class="normal" onclick ="window.location.href='shop.php'";>Explore more</button>
    </section>

    <section id="products1" class="section-p1">
        <h2>Shoes</h2>
        <p> New Modern Design</p>
        <div class="pro-container">
        <?php  include("server/get_shoes.php"); ?>
        <?php while($row = $shoes_products->fetch_assoc()){?> 

            <div class="pro" onclick="window.location.href='sproduct.php?product_id=<?php echo $row['product_id']; ?>'";>
                <img src="assets/img/Products/<?php echo $row['product_image']; ?>" alt="">
               <div class="des">
                    <span>adidas</span>
                    <h5><?php echo $row['product_name']; ?> </h5>
                    <div class="star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <h4><?php echo $row['product_price']; ?> TL</h4>
                </div>
                <a class="add-cart cart1" href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
            </div>
            <?php } ?>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals </h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer </h4>
            <h2>Upcomming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white ">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box ">
            <h2>Seasonal sale</h2>
            <h3>Winter Collection -50% Off</h3>
        </div>
        <div class=" banner-box banner-box2">
            <h2>Seasonal sale</h2>
            <h3>Winter Collection -50% Off</h3>
        </div>
        <div class="banner-box  banner-box3">
            <h2>Seasonal sale</h2>
            <h3>Winter Collection -50% Off</h3>
        </div>


    </section>

    <section id="newletter" class="section-p1 section-m1">
        <div class="newtext">
            <h4>Sign Up For newletters</h4>
            <p>Get E-mail update about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
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