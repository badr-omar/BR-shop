# BR Shop

## Overview
BR Shop is an e-commerce web application with various features including browsing products, managing a shopping cart, and user authentication. The project is built using PHP, with a MySQL database, and front-end components using HTML, CSS, and JavaScript.

## Directory Structure
BR_Shop/
├── about.php
├── account.php
├── blog.php
├── br_shope.sql
├── cart.php
├── contact.php
├── index.php
├── login.php
├── shop.php
├── sproduct.php
├── assets/
│ ├── css/
│ │ └── style.css
│ ├── img/
│ │ └── ... (various images)
│ └── js/
│ └── script.js
└── server/
├── connection.php
├── get_all_products.php
├── get_products.php
└── get_shoes.php



### Files Description

#### PHP Files

- **about.php**: Displays information about the shop.
- **account.php**: Manages user account details.
- **blog.php**: Displays blog posts.
- **cart.php**: Manages the shopping cart functionality.
- **contact.php**: Provides a contact form for users to reach out to the shop.
- **index.php**: The main landing page of the website.
- **login.php**: Handles user login and authentication.
- **shop.php**: Displays the list of products available in the shop.
- **sproduct.php**: Displays details of a single product.

#### Assets

- **css/style.css**: Contains the styles for the web application.
- **img/**: Directory containing various images used in the application.
- **js/script.js**: Contains JavaScript code for interactivity.

#### Server

- **connection.php**: Establishes the connection to the MySQL database.
- **get_all_products.php**: Retrieves all products from the database.
- **get_products.php**: Retrieves a specific product from the database.
- **get_shoes.php**: Retrieves shoe products from the database.

#### SQL

- **br_shope.sql**: SQL script to create the database and tables needed for the application.

### Setup Instructions

1. **Database Setup**:
    - Import `br_shope.sql` into your MySQL database to create the necessary tables.
    - Update `server/connection.php` with your database credentials.

2. **Running the Application**:
    - Place the `BR_Shop` directory in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Start your web server and navigate to `http://localhost/BR_Shop/`.

### Features

- **Product Listing**: Browse through the list of products available in the shop.
- **Product Details**: View detailed information about a specific product.
- **Shopping Cart**: Add products to the cart and manage the cart contents.
- **User Authentication**: Login and manage user accounts.
- **Contact Form**: Contact the shop through a form submission.

### Code Explanation

#### connection.php
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "br_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



get_all_products.php
<?php
include 'connection.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}
echo json_encode($products);
?>



index.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BR Shop</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to BR Shop</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="cart.php">Cart</a>
            <a href="account.php">Account</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <main>
        <h2>Featured Products</h2>
        <!-- Display featured products here -->
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>



This README provides an overview of the project, setup instructions, and a detailed explanation of key files and their functionalities. You can adjust the content based on specific needs or further insights into the project. &#8203;:citation[oaicite:0]{index=0}&#8203;

