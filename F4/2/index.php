<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name analyzer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
// simple function to handle name analysis
function analyzeName($name) {
    // count total characters including space
    $length = strlen($name);

    // make first letter capitalized
    $capitalized = ucfirst($name);

    // change vowels into @ symbol
    $vowels = ['a','e','i','o','u','A','E','I','O','U'];
    $vowelMasked = str_replace($vowels, '@', $name);

    // get all index positions where 'a' appears
    $aPositions = [];
    $lower = strtolower($name);
    for ($i = 0; $i < strlen($lower); $i++) {
        if ($lower[$i] === 'a') {
            $aPositions[] = $i;
        }
    }
    $aResult = count($aPositions) > 0 ? implode(', ', $aPositions) : 'not found';

    // reverse the name
    $reversed = strrev($name);

    return [
        'original' => $name,
        'length' => $length,
        'capitalized' => $capitalized,
        'masked' => $vowelMasked,
        'aIndexes' => $aResult,
        'reversed' => $reversed
    ];
}

// list of names
$charList = [
    "Benedict Collo",
    "Charles Pua",
    "Benedict Collo",
    "Kim Shin del Amen",
    "Janna Ashley",
    "Tara Gerones"
];
?>

<div class="container">
    <h1>Name Analysis Results</h1>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>length</th>
                <th>capitalized</th>
                <th>vowels to @</th>
                <th>indexes of 'a'</th>
                <th>reversed</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($charList as $char): ?>
                <?php $data = analyzeName($char); ?>
                <tr>
                    <td><?php echo $data['original']; ?></td>
                    <td><?php echo $data['length']; ?></td>
                    <td><?php echo $data['capitalized']; ?></td>
                    <td><?php echo $data['masked']; ?></td>
                    <td><?php echo $data['aIndexes']; ?></td>
                    <td><?php echo $data['reversed']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
