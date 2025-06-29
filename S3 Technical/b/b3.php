<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: TSA3B_2login.php");
    exit();
}
$conn = new mysqli("localhost", "root", "", "login_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_SESSION["username"];
$success = "";
$error = "";

$sql = "SELECT * FROM user_info WHERE username='$username'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // logout
    if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header("Location: TSA3B_2login.php");
        exit();
    }
    // reset password
    if (isset($_POST["resetPassword"])) {
        $currentPassword = $_POST["currentPassword"];
        $newPassword = $_POST["newPassword"];
        $reNewPassword = $_POST["reNewPassword"];
        // validate passwords
        if ($currentPassword !== $user["password"]) {
            $error = "Current password is not the same with the old password.";
        } elseif ($newPassword !== $reNewPassword) {
            $error = "New password and Re-Enter new password should be the same.";
        } else {
            // update password
            $updateSql = "UPDATE user_info SET password='$newPassword' WHERE username='$username'";
            if ($conn->query($updateSql) === TRUE) {
                $success = "Password reset successfully.";
                $user["password"] = $newPassword;
            } else {
                $error = "Error updating password: " . $conn->error;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PUA | User Profile</title>
    <link rel="stylesheet" href="styleprofb.css">
</head>
<body>
<div class="header-bar">
    <h2>Welcome! <?php echo $username; ?></h2>
    <form method="POST" style="margin: 0;">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>
</div>
<form method="POST" action="">
    <p>Birthday: <?php echo $user["birthday"]; ?></p>
    <p>Contact Details:</p>
    <div class="contact-details">
        Email: <?php echo $user["email"]; ?><br>
        Number: <?php echo $user["number"]; ?>
    </div>

    <h3>Reset Password</h3>
    <?php if ($error) echo "<div class='message'>$error</div>"; ?>
    <?php if ($success) echo "<div class='message success'>$success</div>"; ?>
    <label>Enter Current Password:</label>
    <input type="password" name="currentPassword" required>
    <label>Enter New Password:</label>
    <input type="password" name="newPassword" required>
    <label>Re-Enter New Password:</label>
    <input type="password" name="reNewPassword" required>
    <input type="submit" name="resetPassword" value="Reset Password">
</form>
</body>
</html>

