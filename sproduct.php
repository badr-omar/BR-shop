<?php  
include("server/connection.php"); 
if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];
    $stmt = $conn->prepare("SELECT * FROM products where product_id =?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $product = $stmt->get_result()->fetch_assoc();


    $category = $product['product_category'];
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_category = ? LIMIT 4");
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $Same_products = $stmt->get_result();
}else{
    header('location: index.php');
}
?>

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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <li><a href="index.php"><img src="assets/img/neu-logo1.png" alt=""></i></a></li>

                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-outdent" aria-hidden="true"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            
            <img src="assets/img/products/<?php echo $product['product_image'];?> " width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/img/products/<?php echo $product['product_image'];?> " width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="assets/img/products/<?php echo $product['product_image2'];?> " width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="assets/img/products/<?php echo $product['product_image3'];?> " width="100%" class="small-img" alt="">
                </div>

                <div class="small-img-col">
                    <img src="assets/img/products/<?php echo $product['product_image4'];?> " width="100%" class="small-img" alt="">
                </div>
            </div>


        </div>

        <div class="single-pro-details">
            <h6>Home / <?php echo $product['product_category'];?> </h6>
            <h4><?php echo $product['product_name'];?> </h4>
            <h2><?php echo $product['product_price'];?> TL </h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>

            <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>" />
                <input type="hidden" name="product_image" value="<?php echo $product['product_image'];?>" />
                <input type="hidden" name="product_name" value="<?php echo $product['product_name'];?>" />
                <input type="hidden" name="product_price" value="<?php echo $product['product_price'];?>" />
                <input type="number" name="product_quantity" value="1">
                <button class="normal" type="submit" name="add_to_cart" >Add To Cart </button>
            </form>
            <h4>Products Details </h4>
            <span>
            <?php echo $product['product_description'];?> </span>
        </div>


       
    </section>

    <section id="products1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Colection New Morden Design</p>
        <div class="pro-container">

        <?php while($row = $Same_products->fetch_assoc()){?> 

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

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function () {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function () {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function () {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function () {
            MainImg.src = smallimg[3].src;
        }

       

    </script>



    <script src="assets/js/script.js">
    </script>
</body>

</html>