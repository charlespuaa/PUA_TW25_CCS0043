<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUA | Number Operations</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <h1>Number Array Operations</h1>

    <?php
    // create a numeric array
    $dataSet = [1, 4, 20, 8, 10, 50, 60, 80, 120, 10];

    // calculate total sum
    $total = array_sum($dataSet);

    // calculate sequential difference
    $diff = $dataSet[0];
    for ($i = 1; $i < count($dataSet); $i++) {
        $diff -= $dataSet[$i];
    }

    // calculate product of all elements
    $multiplied = 1;
    foreach ($dataSet as $val) {
        $multiplied *= $val;
    }

    // calculate division result
    $divResult = $dataSet[0];
    for ($i = 1; $i < count($dataSet); $i++) {
        if ($dataSet[$i] != 0) {
            $divResult /= $dataSet[$i];
        } else {
            $divResult = "undefined";
            break;
        }
    }
    ?>

    <table class="calcTable">
        <thead>
            <tr>
                <th colspan="2">Numbers: <?php echo implode(', ', $dataSet); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Addition</td>
                <td class="result"><?php echo $total; ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td class="result"><?php echo $diff; ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td class="result"><?php echo $multiplied; ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td class="result"><?php echo $divResult; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
