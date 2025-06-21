<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>PUA | POST Form</title>
<link rel="stylesheet" href="post-style.css"></head>
<body>
<?php
$errors = [];
if ($_POST) {
  if (!preg_match("/^[a-zA-Z\s]+$/", $_POST['firstname'])) $errors[] = "Invalid First Name.";
  if (!preg_match("/^[a-zA-Z\s]+$/", $_POST['lastname']))  $errors[] = "Invalid Last Name.";
  if (!preg_match("/^[a-zA-Z0-9\s,\.]+$/", $_POST['address'])) $errors[] = "Invalid Address.";
}
?>

<form method="POST">
  <input name="firstname" placeholder="First Name" required value="<?= $_POST['firstname'] ?? '' ?>"><br>
  <input name="middlename" placeholder="Middle Name" value="<?= $_POST['middlename'] ?? '' ?>"><br>
  <input name="lastname" placeholder="Last Name" required value="<?= $_POST['lastname'] ?? '' ?>"><br>
  <input name="dob" type="date" required value="<?= $_POST['dob'] ?? '' ?>"><br>
  <input name="address" placeholder="Address" required value="<?= $_POST['address'] ?? '' ?>"><br>
  <button type="submit">Submit</button>
  <button type="button" onclick="location.href=location.pathname">Clear</button>
</form>

<?php if ($_POST): ?>
  <?php if ($errors): ?>
    <ul style="color:red"><?php foreach ($errors as $e) echo "<li>$e</li>"; ?></ul>
  <?php else: ?>
    <h3>Submitted Info</h3>
    <p><strong>First:</strong> <?= $_POST['firstname'] ?></p>
    <?php if ($_POST['middlename']) echo "<p><strong>Middle:</strong> {$_POST['middlename']}</p>"; ?>
    <p><strong>Last:</strong> <?= $_POST['lastname'] ?></p>
    <p><strong>DOB:</strong> <?= $_POST['dob'] ?></p>
    <p><strong>Address:</strong> <?= $_POST['address'] ?></p>
  <?php endif; ?>
<?php endif; ?>
</body>
</html>
