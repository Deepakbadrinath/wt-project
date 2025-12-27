<?php
include 'db.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (strlen($password) < 6) {
        $error = "Password must be at least 6 characters";
    } elseif (!preg_match("/[A-Za-z]/", $password) || !preg_match("/[0-9]/", $password)) {
        $error = "Password must contain letters and numbers";
    } else {
        $password = md5($password);
        $sql = "INSERT INTO users (name,email,password)
                VALUES ('$name','$email','$password')";

        if ($conn->query($sql)) {
            header("Location: login.php");
        } else {
            $error = "Email already exists";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>New User Registration</h2>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
  <input type="text" name="name" placeholder="Full Name" required><br><br>
  <input type="email" name="email" placeholder="Email" required><br><br>
  <input type="password" name="password" placeholder="Password" required><br><br>
  <button class="btn" name="register">Register</button>
</form>

<p>Already registered? <a href="login.php">Login</a></p>

</body>
</html>
