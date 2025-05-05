<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pua | TSA1 PART 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $name = "Charles Michael Pua";
    $grade = "";
    $rank = "";

    if (isset($_POST['grade'])) {
        $grade = $_POST['grade'];
    
        // Basic grade ranking using if-else
        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
        } elseif ($grade >= 90) {
            $rank = "A-";
        } elseif ($grade >= 87) {
            $rank = "B+";
        } elseif ($grade >= 83) {
            $rank = "B";
        } elseif ($grade >= 80) {
            $rank = "B-";
        } elseif ($grade >= 77) {
            $rank = "C+";
        } elseif ($grade >= 73) {
            $rank = "C";
        } elseif ($grade >= 70) {
            $rank = "C-";
        } else {
            $rank = "F";
        }
    }
    ?>


    <div class="info">
        <img src="pua.jpeg" alt="student pic">
        <h2> <?= $name ?> </h2>
        <form method="post">
            <label for="grade"> Enter Grade: </label> <br>
            <input type="number" name="grade" id="grade" min="0" max="100" required>
        <br>
        <button type="submit">Check Grade</button> <br>
            </form>

        <?php if (isset($_POST['grade'])): ?>
        <div class="result">
            Grade: <?= $grade ?><br>
            Rank: <strong><?= $rank ?></strong>
        </div>
    <?php endif; ?>

    </div>
</body>
</html>