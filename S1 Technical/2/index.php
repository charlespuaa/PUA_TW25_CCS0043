<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUA|Multiplication Table</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <h1>Multiplication Table</h1>
    <table class="multiplication-table">
        <?php
        // Loop through rows
        for($row = 0; $row <= 10; $row++){
            $rowContent = "<tr>"; 
            // Loop through columns
            for($col = 0; $col <= 10; $col++){
                $product = $row * $col;
                // Determine class for alternating background colors
                $cellClass = (($row + $col) % 2 == 0) ? 'even-cell' : 'odd-cell';
                // Append cell 
                $rowContent .= "<td class='$cellClass'>$product</td>";
            }
            $rowContent .= "</tr>"; 
            echo $rowContent; 
        }
        ?>
    </table>
</body>
</html>