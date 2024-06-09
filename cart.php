<?php
session_start();
if(isset($_POST['add_to_cart'])){
   if(isset($_SESSION['cart'])){
        $product_array_ids=array_column($_SESSION['cart'],"product_id");
        if(!in_array($_POST["product_id"], $product_array_ids)){
            $product_id = $_POST['product_id'];
            $product_image = $_POST['product_image'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_quantity = $_POST['product_quantity'];
            
            $product_array = array('product_id'=>$product_id,
                                   'product_image'=>$product_image,
                                   'product_name'=>$product_name,
                                   'product_price'=>$product_price,
                                   'product_quantity'=>$product_quantity);
    
            $_SESSION['cart'][$product_id]=$product_array;
        }else{
            echo'<script>alert("product was already added to the cart");</script>';
        }

    }else{
        $product_id = $_POST['product_id'];
        $product_image = $_POST['product_image'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_quantity = $_POST['product_quantity'];
        
        $product_array = array('product_id'=>$product_id,
                               'product_image'=>$product_image,
                               'product_name'=>$product_name,
                               'product_price'=>$product_price,
                               'product_quantity'=>$product_quantity);

        $_SESSION['cart'][$product_id]=$product_array;
    }

calcTotalCart();
}
else if(isset($_POST['remove_product'])){
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    calcTotalCart();
}else if(isset($_POST['edit_quantity'])){
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];
    $product_array = $_SESSION['cart'][$product_id];
    $product_array['product_quantity'] = $product_quantity;
    $_SESSION['cart'][$product_id]=$product_array;
    calcTotalCart();
}

function calcTotalCart(){
    $total = 0;
    foreach($_SESSION["cart"] as $key=>$value){
        $product = $_SESSION["cart"][$key];
        $price= $product["product_price"];
        $quantity = $product["product_quantity"];
        $total= $total+($price * $quantity);    
    }
    $_SESSION['total'] = $total;
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
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
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
    <h2>Cart</h2>
    <p>use your copon to got a good offer</p>
</section>


<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION['cart'] as $key =>$value){ ?>
            <tr>
                <td>
                    <form method = "POST" action ="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>" />
                    <button type="submit" name="remove_product" >
                                <i class="fa fa-times-circle"></i>
                            </button>
                    </form>
                </td>
                <td><img src="assets/img/Products/<?php echo $value['product_image']; ?>" alt="" ></td>
                <td><?php echo $value['product_name']; ?></td>
                <td><?php echo $value['product_price']; ?> TL</td>

                <td>
                    <form method = "POST" action ="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>" />
                    <input type="number" name="product_quantity" value=<?php echo $value['product_quantity']; ?>>
                    <input type="submit" name="edit_quantity" value="edit" class ="edit-btn"/>
                    </form>
                </td>
                <td><?php echo $value['product_price']* $value['product_quantity']; ?> TL</td>
            </tr>
            <?php }?>
        </tbody>
    </table>

</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3> Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>

    </div>
    <div id="subtotal">
        <h3>Cart Total</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td><?php echo $_SESSION['total'];?> TL</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td><?php echo $_SESSION['total'] * 5 / 100 ;?> TL</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong><?php echo $_SESSION['total'] +  ($_SESSION['total'] * 5 / 100 );?> TL</strong></td>
            </tr>
        </table>
    <button class="normal">Check Out</button>
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