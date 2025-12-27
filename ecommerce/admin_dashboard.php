<?php
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Admin Dashboard</h2>
<p>Welcome, Admin</p>

<ul>
  <li><a href="index.php">View Store</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

</body>
</html>
