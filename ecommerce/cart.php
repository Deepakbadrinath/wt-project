<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Your Cart</h2>
<?php
$total = 0;
if (!empty($_SESSION['cart'])) {
foreach ($_SESSION['cart'] as $id) {
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
echo $row['name'] . " - ₹" . $row['price'] . "<br>";
$total += $row['price'];
}
}
?>
<p><strong>Total: ₹<?php echo $total; ?></strong></p>
<a href="checkout.php">Checkout</a>
</body>
</html>