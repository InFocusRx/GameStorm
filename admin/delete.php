<?php
include("config.php");

$id = $_GET['product_id'];
$order_id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM products WHERE product_id=$id");

$orders = mysqli_query($mysqli, "DELETE FROM orders WHERE id=$order_id");

header("Location:home.php");
?>

