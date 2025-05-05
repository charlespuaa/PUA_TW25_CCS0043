<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pua | F2</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <h1> Randomly Generated 15 Numbers: </h1>

        <?php
        // create an empty array
        $numbers = [];

        // number generator between 1 - 100
        for ($i = 0; $i < 15; $i++) {
            $numbers[] = rand(1, 100); // generates
        }
        // finds highest number 
        $max = max($numbers);
        // finds lowest number
        $min = min($numbers);
        // sum of all numbers
        $sum = array_sum($numbers);
        // average
        $avg = $sum / count($numbers);
        ?>

        <!-- display output -->
        <p class="numbers"> <?= implode(", ", $numbers) ?> </p>
        <br>
        <p>Highest: <?= $max ?> </p>
        <p>Lowest: <?= $min ?> </p>
        <p>Sum: <?= $sum ?> </p>
        <p>Average: <?= round(num: $avg, precision: 2) ?> </p>
        <br> 
        <div class="button">
            <form method="post">
                <button type="submit"> Generate New Numbers </button>
            </form>
        </div>
    </div>
</body>
</html>
















<!--
    <h1> Enter 15 numbers: </h1>

    <form method="post">
        <textarea name="number_input" placeholder="e.g. 1, 2, 3, 4, ... 15 ..."> </textarea>
        <br> <br>
        <input type="submit" value="Submit">
    </form>

    -->

<?php
/*
    // check if form was submitted
    if (isset($_POST["submit"])) {
        // get raw input string from text box
        $input = $_POST["numbers"];
        // split string into array using comma
        $parts = explode(separator: ",", string: $input);



    }
  */
?>





</body>