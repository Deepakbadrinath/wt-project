<?php
include 'db.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $result = $conn->query(
        "SELECT * FROM users WHERE email='$email' AND password='$password'"
    );

    if ($result->num_rows == 1) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
    } else {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>User Login</h2>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <button class="btn" name="login">Login</button>
</form>

<p>
<a href="register.php">New User?</a> |
<a href="forgot_password.php">Forgot Password?</a>
</p>

</body>
</html>
