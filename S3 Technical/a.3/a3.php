<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PUA | Home Page</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

<div class="form-container">
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p style="align-self: center;">You are now logged in.</p>
<div class="logout-container">
    <a href="logout.php" class="logout">Logout</a>
</div>

</div>

</body>
</html>
