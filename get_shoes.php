<?php
include("connection.php");

$stmt = $conn->prepare("SELECT * FROM products where product_category ='shoes' LIMIT 8");
$stmt->execute();
$shoes_products = $stmt->get_result();
?>