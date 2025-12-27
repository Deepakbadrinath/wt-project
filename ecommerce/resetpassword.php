<?php
include 'db.php';

if (!isset($_SESSION['reset_email'])) {
    header("Location: login.php");
}

if (isset($_POST['reset'])) {
    $newpass = md5($_POST['password']);
    $email = $_SESSION['reset_email'];

    $conn->query("UPDATE users SET password='$newpass' WHERE email='$email'");
    unset($_SESSION['reset_email']);
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Reset Password</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Reset Password</h2>

<form method="post">
  <input type="password" name="password" placeholder="New Password" required><br><br>
  <button class="btn" name="reset">Reset</button>
</form>

</body>
</html>
