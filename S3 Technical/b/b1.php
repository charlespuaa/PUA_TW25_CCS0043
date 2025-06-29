<?php
$success = "";
$error = "";
$conn = new mysqli("localhost", "root", "", "login_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    // regex
    $emailPattern = "/^[A-Za-z]+[A-Za-z0-9_.]*@[A-Za-z0-9-]+\.[A-Za-z]{2,}$/";
    $numberPattern = "/^09\d{9}$/";
    // input validation
    if ($password !== $confirmPassword) {
        $error = "Password and Confirm Password are not the same.";
    } elseif (!preg_match($emailPattern, $email)) {
        $error = "Invalid email format.";
    } elseif (!preg_match($numberPattern, $number)) {
        $error = "Invalid mobile number.";
    } else {
      
        $sql = "INSERT INTO user_info 
            (first_name, middle_name, last_name, username, password, birthday, email, number)
            VALUES 
            ('$firstName', '$middleName', '$lastName', '$username', '$password', '$birthday', '$email', '$number')";

        if ($conn->query($sql) === TRUE) {
            $success = "Registration successful!";
        } else {
            $error = "Error: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PUA | Personal Information</title>
    <link rel="stylesheet" href="styleprofb.css">
</head>
<body>
<!-- main form -->
<form method="POST" action="">
    <h2>Personal Information</h2>

    <?php if ($error) echo "<div class='message'>$error</div>"; ?>
    <?php if ($success) echo "<div class='message success'>$success</div>"; ?>

    <label>First Name</label>
    <input type="text" name="firstName" required>
    <label>Middle Name</label>
    <input type="text" name="middleName" required>
    <label>Last Name</label>
    <input type="text" name="lastName" required>
    <label>Username</label>
    <input type="text" name="username" required>
    <label>Password</label>
    <input type="password" name="password" required>
    <label>Confirm Password</label>
    <input type="password" name="confirmPassword" required>
    <label>Birthday</label>
    <input type="date" name="birthday" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Mobile Number</label>
    <input type="tel" name="number" required>
    <input type="submit" value="Register">
</form>
</body>
</html>

