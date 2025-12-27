<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check->num_rows == 1) {
        $_SESSION['reset_email'] = $email;
        header("Location: reset_password.php");
    } else {
        $error = "Email not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Forgot Password</h2>
<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="post">
  <input type="email" name="email" placeholder="Enter Email" required><br><br>
  <button class="btn" name="submit">Submit</button>
</form>

</body>
</html>
