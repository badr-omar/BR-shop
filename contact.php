<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>online_shoping</title>
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
                <li><a class="active"  href="contact.php">Contact</a></li>
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

    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency loction or Contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <p>Yakın Doğu Üniversitesi 
                         Yakın Doğu Bulvarı 
                         Lefkoşa, KKTC</p>
                </li>
                <li>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <p>Contact@example.com</p>
                </li>
                <li>
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>Contact@example.com</p>
                </li>
                <li>
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <p>Monday to Saturday 9.00am to 9.00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2586.8736638730334!2d33.327272028092196!3d35.22499683998157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de111433eedaad%3A0xb704548b1127a239!2sNear%20East%20University!5e0!3m2!1sen!2str!4v1715704722950!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>">
        </div>

    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your MESSAGE">
            </textarea>
        <button class="normal">submit</button>
        </form>
        <div class="people">
            <div>
                <img src="assets/img/people/1.png" alt="">
                <p><span>JOHN DOE</span>Senior Marketing Manger <br> phone no 8785646575 <br>
                Email:contact@example.com</p>
            </div>
            <div>
                <img src="assets/img/people/2.png" alt="">
                <p><span>JOHN DOE</span>Senior Marketing Manger <br> phone no 8785646575 <br>
                    Email:contact@example.com</p>
            </div>
            <div>
                <img src="assets/img/people/3.png" alt="">
                <p><span>JOHN DOE</span>Senior Marketing Manger <br> phone no 8785646575 <br>
                    Email:contact@example.com</p>
            </div>
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
</body>

</html>