<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>E‑Commerce</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Simple E‑Commerce Store</h2>
<a href="cart.php">View Cart</a>


<div class="products">
<?php
$result = $conn->query("SELECT * FROM products");
while($row = $result->fetch_assoc()){
?>
<div class="product">
<img src="images/<?php echo $row['image']; ?>">
<h3><?php echo $row['name']; ?></h3>
<p>₹<?php echo $row['price']; ?></p>
<a class="btn" href="add_to_cart.php?id=<?php echo $row['id']; ?>">Add to Cart</a>
</div>
<?php } ?>
</div>


<script src="js/script.js"></script>
</body>
</html>