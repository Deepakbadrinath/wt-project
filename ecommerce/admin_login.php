<?php
include 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $result = $conn->query(
        "SELECT * FROM admin WHERE username='$username' AND password='$password'"
    );

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
    } else {
        $error = "Invalid Admin Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Admin Login</h2>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
  <input type="text" name="username" placeholder="Username" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <button class="btn" name="login">Login</button>
</form>

</body>
</html>
