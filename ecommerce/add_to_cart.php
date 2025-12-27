<?php
include 'db.php';
$id = $_GET['id'];
$_SESSION['cart'][] = $id;
header("Location: cart.php");
?>