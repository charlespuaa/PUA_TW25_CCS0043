<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Set or clear cookies based on checkbox
    $time = $remember ? time() + 10 : time() - 10;
    setcookie('username', $remember ? $user : '', $time);
    setcookie('password', $remember ? $pass : '', $time);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PUA | Log In</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="form-container">
        <h2>Login Form</h2>

        <form method="POST">
            <label>Username:</label>
            <input type="text" name="username" required value="<?= $_COOKIE['username'] ?? '' ?>">

            <label>Password:</label>
            <input type="password" name="password" required value="<?= $_COOKIE['password'] ?? '' ?>">

            <label class="checkbox">
                <input type="checkbox" name="remember" <?= isset($_COOKIE['username']) ? 'checked' : '' ?>>
                Remember Me
            </label>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>