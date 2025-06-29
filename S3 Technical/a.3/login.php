<?php
session_start();
// redirect if already logged in
if (isset($_SESSION['username'])) {
    header("Location: a3.php");
    exit();
}
// static values
$validUser = "charlespua";
$validPass = "charlespua";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === $validUser && $pass === $validPass) {
        $_SESSION['username'] = $user;

        // if remember me is checked
        if (isset($_POST['remember'])) {
            setcookie('username', $user, time() + 10);
            setcookie('password', $pass, time() + 10);
        } else { 
            setcookie('username', '', time() - 10); 
            setcookie('password', '', time() - 10);
        }

        header("Location: a3.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PUA | Log In</title>
    <link rel="stylesheet" href="../a.2/style2.css">
</head>
<body>

<div class="form-container">
    <h2>Login Form</h2>

    <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>
    <!-- Login Form -->
    <form method="POST" action="">
        <!-- fill username if there is cookie -->
        <label>Username:</label>
        <input type="text" name="username" required
               value="<?php echo $_COOKIE['username'] ?? ''; ?>">
        
        <label>Password:</label>
        <input type="password" name="password" required
               value="<?php echo $_COOKIE['password'] ?? ''; ?>">

        <label class="checkbox">
            <input type="checkbox" name="remember"
                   <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
            Remember Me
        </label>

        <input type="submit" name="login" value="Login">
    </form>
</div>

</body>
</html>
