<!DOCTYPE html>
<html>
<head>
    <title>PUA | Personal Information</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="form-container">
        <h2 class="form-title">Personal Information</h2>
        <?php if (isset($error)) echo "<div class='error'>$error</div>"; ?>

        <!-- main form  -->
        <form method="POST" action="">
            <label>Full Name:</label>
            <input type="text" name="fullname" required>
            <label>Email:</label>
            <input type="email" name="email" required
                pattern="[A-Za-z]+[A-Za-z0-9_.]*@[A-Za-z0-9-]+\.[A-Za-z]{2,}"
                title="Enter a valid email address">
            <label>Mobile Number:</label>
            <input type="text" name="number" required
                pattern="^09\d{9}$"
                title="Enter a valid mobile number">
            <label>Birthday:</label>
            <input type="date" name="birthday" required
                pattern="^(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])-\d{4}$"
                title="Enter birthday in MM-DD-YYYY format">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" required>
            <input type="submit" name="submit" value="Register">
        </form>
        <?php
        // form submission
        if (isset($_POST['submit'])) {
            $fullName = $_POST['fullname'] ?? '';
            $email = $_POST['email'] ?? '';
            $number = $_POST['number'] ?? '';
            $birthday = $_POST['birthday'] ?? '';
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            $confirmPassword = $_POST['confirm_password'] ?? '';
            // regex validation
            $emailPattern = "/^[A-Za-z]+[A-Za-z0-9_.]*@[A-Za-z0-9-]+\.[A-Za-z]{2,}$/";
            $numberPattern = "/^09\d{9}$/";
            // validation errors 
            $errors = [];
            // match email 
            if (!preg_match($emailPattern, $email)) {
                $errors[] = "Invalid email format.";
            }
            // match mobile number 
            if (!preg_match($numberPattern, $number)) {
                $errors[] = "Invalid mobile number format. Example: 09123456789";
            }
            // match passwords
            if ($password !== $confirmPassword) {
                $errors[] = "Password and Confirm Password are not the same.";
            }
            // error
            if (!empty($errors)) {
                echo "<div class='error'><ul>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul></div>";
            } else {
                echo "<div class='result'>
                    <h3>Registration Successful</h3>
                    <p><strong>Full Name:</strong> $fullName</p>
                    <p><strong>Email:</strong> $email</p>
                    <p><strong>Mobile Number:</strong> $number</p>
                    <p><strong>Birthday:</strong> $birthday</p>
                    <p><strong>Username:</strong> $username</p>
                    <p><strong>Password:</strong> $password</p>
                  </div>";
            }
        }
        ?>
    </div>
</body>
</html>