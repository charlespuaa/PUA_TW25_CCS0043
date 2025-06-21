<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PUA | GET Form</title>
  <link rel="stylesheet" href="get-style.css">
</head>
<body>

<?php
$errors = [];
if ($_GET) {
  if (!preg_match("/^[a-zA-Z\s]+$/", $_GET['firstname'])) $errors[] = "Invalid First Name.";
  if (!preg_match("/^[a-zA-Z\s]+$/", $_GET['lastname']))  $errors[] = "Invalid Last Name.";
  if (!preg_match("/^[a-zA-Z0-9\s,\.]+$/", $_GET['address'])) $errors[] = "Invalid Address.";
}
?>

<form method="GET">
  <input name="firstname" placeholder="First Name" required value="<?= $_GET['firstname'] ?? '' ?>"><br>
  <input name="middlename" placeholder="Middle Name" value="<?= $_GET['middlename'] ?? '' ?>"><br>
  <input name="lastname" placeholder="Last Name" required value="<?= $_GET['lastname'] ?? '' ?>"><br>
  <input name="dob" type="date" required value="<?= $_GET['dob'] ?? '' ?>"><br>
  <input name="address" placeholder="Address" required value="<?= $_GET['address'] ?? '' ?>"><br>
  <button type="submit">Submit</button>
  <button type="button" onclick="location.href=location.pathname">Clear</button>
</form>

<?php if ($_GET): ?>
  <?php if ($errors): ?>
    <ul><?php foreach ($errors as $e) echo "<li>$e</li>"; ?></ul>
  <?php else: ?>
    <div class="output">
      <h3>Submitted Info</h3>
      <p><strong>First:</strong> <?= $_GET['firstname'] ?></p>
      <?php if ($_GET['middlename']) echo "<p><strong>Middle:</strong> {$_GET['middlename']}</p>"; ?>
      <p><strong>Last:</strong> <?= $_GET['lastname'] ?></p>
      <p><strong>DOB:</strong> <?= $_GET['dob'] ?></p>
      <p><strong>Address:</strong> <?= $_GET['address'] ?></p>
    </div>
  <?php endif; ?>
<?php endif; ?>

</body>
</html>
