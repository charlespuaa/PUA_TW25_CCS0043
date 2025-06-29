<?php
session_start();
$error = "";
$success = "";

$conn = new mysqli("localhost", "root", "", "login_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $_SESSION["username"] = $username;
        header("Location: b3.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PUA | Log In</title>
    <link rel="stylesheet" href="styleb.css">
</head>
<body>
<form method="POST" action="">
    <h2>Log In</h2>
    <?php if ($error) echo "<div class='message'>$error</div>"; ?>
    <?php if ($success) echo "<div class='message success'>$success</div>"; ?>
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <input type="submit" value="Login">
</form>
</body>
</html>

