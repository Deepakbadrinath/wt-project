<?php
$conn = new mysqli("localhost", "root", "", "ecommerce");
if ($conn->connect_error) {
die("Database Connection Failed");
}
session_start();
?>