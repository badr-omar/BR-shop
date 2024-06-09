<?php 
session_start();
include("server/connection.php");

if(isset($_SESSION['logged_in'])){
    header('location:account.php');
    exit;
}
if(isset($_POST["register"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];

    //chck for password 
    if($confirmpassword != $password){
        header('location:login.php?error=password dont mach');
    }   
    else if(strlen($password)<6){
        header('location:login.php?error=password must be at least 6 charcter');
    }
    else{
    //check if the user register before
    $stmt1 =$conn->prepare('SELECT COUNT(*) FROM users WHERE user_email=?');
    $stmt1->bind_param('s',$email);
    $stmt1->execute();
    $stmt1->bind_result($num_rows);
    $stmt1->store_result();
    $stmt1->fetch();
    if($num_rows >0){
        header('location:login.php?error=user with this email alrady exists');
    }else{
        //creat new user
        $stmt=$conn->prepare('INSERT INTO users (user_name,user_email,user_password) Values(?,?,?)');
        $stmt->bind_param('sss', $name, $email,md5($password));
        if ($stmt->execute()){
            $_SESSION['user_name']=$name;
            $_SESSION['user_email'] = $email;
            $_SESSION['logged_in'] = true;
            
            header('location:account.php?message=Registerd Succesfuly');
        }else{
            header('location:login.php?error=Couldnt create an account at the moment');
        }
        }
    }

}if(isset($_POST["login"])){
     $email=$_POST["email"];
    $password=md5($_POST["password"]);
    $stmt1 =$conn->prepare('SELECT user_id , user_name,user_email,user_password FROM users WHERE user_email=? AND user_password=? LIMIT 1');
    $stmt1->bind_param('ss',$email,$password);

    if($stmt1->execute()){
        $stmt1->bind_result($user_id, $user_name, $user_email, $user_password);
        $stmt1->store_result();
        if($stmt1->num_rows()==1){
            $stmt1->fetch();
            $_SESSION['user_id']= $user_id;
            $_SESSION['user_name']= $user_name;
            $_SESSION['user_email']= $user_email;
            $_SESSION['logged_in']= true;
            header('location:account.php?message=LoggedIn Succesfuly');
        }else{
            header('location:login.php?error=could not verify your account');
        }

    }else{
        header('location:login.php?error=something went wrong');
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
                <li id="account"><a class="active" href="login.php"><i class="fa fa-user-circle" aria-hidden="true"></i></a></li>
                <li><a href="index.php"><img src="assets/img/neu-logo1.png" alt=""></i></a></li>

                <a href="#" id="close"><i class="fa fa-times" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-outdent" aria-hidden="true"></i>
        </div>
    </section>

    <section class="account-page">
        <div class="container">
            <div class="row">

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Sign in</span>
                            <span onclick="register()">Sign Up</span>
                            <hr id="Indicator">
                        </div>

                        <form id="LoginForm" method="POST" action="login.php">
                            <p style="color: red;"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                            <h3>Welcome Back!👋</h3>
                            <br>
                            <input type="text" placeholder="Email" name = "email">
                            <input type="password" placeholder="password" name ="password">
                            <br>
                            <a href="">Forgot password?</a> <br>
                            <button type="submit" class="btn"  name ="login">Login</button>
                            <br>
                            <a href=""><u>Don't have an account? Sign Up</u></a>
                        </form>

                        <form id="RegForm" method="POST" action="login.php">
                            <p style="color: red;"><?php if(isset($_GET['error'])){echo $_GET['error'];}?></p>
                            <h3> Create new account</h3>
                            <br>
                            <input type="text" autocomplete="off" placeholder="Username"  name ="name">
                            <input type="email" autocomplete="off" placeholder="Email" name="email">
                            <input type="password" autocomplete="off" placeholder="password" name ="password">
                            <input type="password" autocomplete="off" placeholder="Confirm password" name ="confirmpassword">
                            <button type="submit" class="btn" name ="register">Create Account</button>
                            <br>
                            <a  onclick="login()" ><u>Already have an account? Sign in</u></a>
                        </form>


                    </div>
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

    <script>

        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");

        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translatex(0px)";
            Indicator.style.transform = "translatex(100px)";
        }
        function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translatex(300px)";
            Indicator.style.transform = "translatex(0px)";
        }


    </script>
    <script src="assets/js/script.js">
    </script>
</body>

</html>