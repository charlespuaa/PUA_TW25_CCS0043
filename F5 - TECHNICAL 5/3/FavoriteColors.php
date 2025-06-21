<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PUA | Favorite Colors</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-wrapper">
    <h2>🎨 Enter Your 5 Favorite Colors</h2>
    <form action="ResultColors.php" method="POST">
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <label>
          Favorite Color <?= $i ?>:
          <input type="text" name="color<?= $i ?>" placeholder="e.g. Red or #FF0000" required>
        </label>
      <?php endfor; ?>
      <button type="submit">Send Colors</button>
    </form>
  </div>
</body>
</html>
