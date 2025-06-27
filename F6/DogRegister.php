<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dog_registry";

$conn = new mysqli($host, $user, $pass, $db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $color = $_POST["color"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight) 
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success'> Dog information saved successfully!</div>";
    } else {
        $message = "<div class='error'> Error: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PUA | Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="">
    <h2>Dog Information</h2>

    <?php if (!empty($message)) echo $message; ?>

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Breed</label>
    <input type="text" name="breed" required>

    <label>Age</label>
    <input type="text" name="age" required>

    <label>Address</label>
    <input type="text" name="address" required>

    <label>Color</label>
    <input type="text" name="color" required>

    <label>Height</label>
    <input type="text" name="height" required>

    <label>Weight</label>
    <input type="text" name="weight" required>

    <input type="submit" value="Save">
</form>


</body>
</html>
