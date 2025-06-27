<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dog_registry";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM dogs";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="view-style.css">
</head>

<body>

    <div class="container">
        <h2>🐾 All Registered Dogs</h2>

        <?php if ($result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Color</th>
                        <th>Height</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row["name"]) ?></td>
                            <td><?= htmlspecialchars($row["breed"]) ?></td>
                            <td><?= htmlspecialchars($row["age"]) ?></td>
                            <td><?= htmlspecialchars($row["address"]) ?></td>
                            <td><?= htmlspecialchars($row["color"]) ?></td>
                            <td><?= htmlspecialchars($row["height"]) ?></td>
                            <td><?= htmlspecialchars($row["weight"]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>

        <div class="back-link">
            <a href="DogRegister.php">← Back to Registration</a>
        </div>
    </div>

</body>

</html>

<?php $conn->close(); ?>