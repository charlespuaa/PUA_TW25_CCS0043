<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function Calculations</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body>
    <h1>User Defined Function Calculator</h1>

    <?php
    // user-defined function 
    function computeNumbers($x, $y, $z) {
        $result = [];

        // sum
        $result['addition'] = $x + $y + $z;

        // difference
        $result['difference'] = $x - $y - $z;

        // product
        $result['multiplication'] = $x * $y * $z;

        // quotient
        // prevent division by zero
        if ($y != 0 && $z != 0) {
            $result['division'] = $x / $y / $z;
        } else {
            $result['division'] = "Undefined";
        }

        return $result;
    }

    // define inputs
    $a = 18;
    $b = 6;
    $c = 24;

    // run function
    $output = computeNumbers($a, $b, $c);
    ?>

    <table class="calcTable">
        <thead>
            <tr>
                <th colspan="2">Defined Values: <?php echo "$a, $b, $c"; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Addition</td>
                <td class="result"><?php echo $output['addition']; ?></td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td class="result"><?php echo $output['difference']; ?></td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td class="result"><?php echo $output['multiplication']; ?></td>
            </tr>
            <tr>
                <td>Division</td>
                <td class="result"><?php echo $output['division']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>
