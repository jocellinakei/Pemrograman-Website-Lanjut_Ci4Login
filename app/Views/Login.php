<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "admin@example.com" && $password == "123456") {
        echo "<script>alert('Login berhasil!');</script>";
    } else {
        echo "<script>alert('Email atau password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h1>Login Form</h1>
    <form action="login.php" method="post">
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
