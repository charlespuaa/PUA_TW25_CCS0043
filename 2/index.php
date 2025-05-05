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
    $name = "Charles Michael Pua"
    $grade = "";
    $rank = "";

    if ($grade == 100 && $grade >= 93){
        echo "A";
    }
    elseif ($grade == 92 && $grade >= 90){
        echo "A-";
    }
    elseif ($grade == 89 && $grade >= 87){
        echo "B+";
    }
    elseif ($grade == 86 && $grade >= 83){
        echo "B";
    }
    elseif ($grade == 82 && $grade >= 80){
        echo "B-";
    }
    elseif ($grade == 79 && $grade >= 77){
        echo "C+";
    }
    elseif ($grade == 76 && $grade >= 73){
        echo "C";
    }
    elseif ($grade == 72 && $grade >= 70){
        echo "C-";
    }

    ?>

    <div class="info">
        <img src="pua.jpeg" alt="student pic">
        <h2> <?= $name ?> </h2>
        <form method="post">
            <label for="grade"> Enter Grade: </label> <br>
            
        </form>

    </div>

    


</body>