<?php
session_start();

// store form data into session on first POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  for ($i = 1; $i <= 5; $i++) {
    $_SESSION["color$i"] = $_POST["color$i"] ?? '';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PUA | Result Colors</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="result-wrapper">
    <h2>🌈 Your Favorite Colors</h2>
    <div class="color-display">
      <?php for ($i = 1; $i <= 5; $i++): ?>
        <?php $color = htmlspecialchars($_SESSION["color$i"] ?? 'gray'); ?>
        <div class="color-box" style="background-color: <?= $color ?>;">
          <span><?= "$color" ?></span>
        </div>
      <?php endfor; ?>
    </div>
    <a class="back-button" href="FavoriteColors.php">🔙 Choose Again</a>
  </div>
</body>
</html>
