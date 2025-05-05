<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Two-Digit Combinations</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
<br><br>
<h1 class="page-title">All Two-Digit Combinations (00–99)</h1>

<div class="container">
    <div class="numbers">
        <?php
        for ($i = 0; $i < 100; $i++) {
            echo str_pad($i, 2, '0', STR_PAD_LEFT);
            if ($i < 99) {
                echo ', ';
            }
        }
        ?>
    </div>
</div>

</body>
</html>
