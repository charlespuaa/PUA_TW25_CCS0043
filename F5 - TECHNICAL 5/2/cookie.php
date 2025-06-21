<?php
// reset cookies if not set yet or 60 seconds passed
if (!isset($_COOKIE['start_time']) || (time() - $_COOKIE['start_time']) >= 60) {
    // set all cookies to last 50 seconds
    setcookie('firstname', 'Charles', time() + 50);
    setcookie('middlename', 'Michael', time() + 50);
    setcookie('lastname', 'Pua', time() + 50);
    // set the start time to now
    setcookie('start_time', time(), time() + 60);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PUA | Personal Information Cookie Display</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>Personal Information (Cookies)</h2>

  <div class="box">
    <?php
    if (isset($_COOKIE['start_time'])) {
        $elapsed = time() - $_COOKIE['start_time'];

        echo "<p><strong>First Name:</strong> " . 
             ($elapsed >= 10 && isset($_COOKIE['firstname']) ? $_COOKIE['firstname'] : "<em>wait 10 seconds...</em>") . 
             "</p>";

        echo "<p><strong>Middle Name:</strong> " . 
             ($elapsed >= 20 && isset($_COOKIE['middlename']) ? $_COOKIE['middlename'] : "<em>wait 20 seconds...</em>") . 
             "</p>";

        echo "<p><strong>Last Name:</strong> " . 
             ($elapsed >= 30 && isset($_COOKIE['lastname']) ? $_COOKIE['lastname'] : "<em>wait 30 seconds...</em>") . 
             "</p>";
    } else {
        echo "<p><em>cookies initialized. refresh this page after 10 seconds.</em></p>";
    }
    ?>
  </div>

  <p class="tip">
    <small>Refresh the page after 10s, 20s, and 30s to see the names appear.<br>
    After 1 minute, cookies will reset automatically.</small>
  </p>

</body>
</html>
