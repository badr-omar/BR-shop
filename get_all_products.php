<?php
include("connection.php");

$stmt = $conn->prepare("SELECT * FROM products ");
$stmt->execute();
$feaatured_products = $stmt->get_result();
?>