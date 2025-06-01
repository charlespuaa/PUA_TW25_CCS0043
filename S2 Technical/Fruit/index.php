<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Favorite Fruits</h1>

    <?php
    // fruit array
    $fruit_list = [
        [
            'name' => 'Papaya',
            'image' => 'https://static.vecteezy.com/system/resources/previews/025/230/099/non_2x/fresh-papaya-fruit-with-slice-isolated-on-transparent-background-png.png',
            'description' => 'A tropical fruit with orange flesh and black seeds, usually eaten ripe or green.',
            'fact' => 'Papaya contains papain, an enzyme that helps digestion, and is packed with Vitamin C.'
        ],
        [
            'name' => 'Guava',
            'image' => 'https://png.pngtree.com/png-vector/20250219/ourmid/pngtree-isolated-guava-fruit-one-whole-green-and-a-sliced-half-with-png-image_15504785.png',
            'description' => 'A sweet fruit with green skin and pink or white flesh. It has a distinct aroma and flavor.',
            'fact' => 'Guavas are rich in antioxidants and have more Vitamin C than many citrus fruits.'
        ],
        [
            'name' => 'Dragon Fruit',
            'image' => 'https://img.pikbest.com/png-images/20240830/realistic-image-of-dragon-fruit_10777008.png!sw800',
            'description' => 'A vibrant fruit with pink skin and green scales, usually filled with speckled white or red flesh.',
            'fact' => 'Dragon fruit supports gut health due to its high fiber and prebiotic content.'
        ],
        [
            'name' => 'Rambutan',
            'image' => 'https://png.pngtree.com/png-clipart/20210530/original/pngtree-rambutan-red-fruit-nature-png-image_6357589.jpg',
            'description' => 'A hairy-looking red fruit that hides juicy white flesh inside. It’s similar to lychee.',
            'fact' => 'Rambutans are a great source of iron and Vitamin C.'
        ],
        [
            'name' => 'Starfruit',
            'image' => 'https://png.pngtree.com/png-clipart/20220814/ourmid/pngtree-star-fruit-digital-paintings-illustration-png-image_6110004.png',
            'description' => 'A yellow fruit that forms star-shaped slices, with a crisp and tangy taste.',
            'fact' => 'Starfruit is low in sugar and rich in fiber and antioxidants.'
        ],
        [
            'name' => 'Soursop',
            'image' => 'https://static.vecteezy.com/system/resources/thumbnails/029/333/917/small_2x/custard-apple-transparent-background-png.png',
            'description' => 'A green spiny fruit with soft white pulp that tastes like strawberry and citrus combined.',
            'fact' => 'Soursop may help reduce inflammation and is used in traditional medicine.'
        ]
    ];

    // sort alphabetically
    usort($fruit_list, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    ?>

    <table class="fruit-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Fun Fact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // fruit loop
            foreach ($fruit_list as $index => $fruit) {
                // even row checker
                $row_class = ($index % 2 === 0) ? 'even-row' : '';
                echo '<tr class="' . $row_class . '">';
                echo '<td><img src="' . $fruit['image'] . '" alt="' . $fruit['name'] . '" class="fruit-pic"></td>';
                echo '<td>' . $fruit['name'] . '</td>';
                echo '<td>' . $fruit['description'] . '</td>';
                echo '<td>' . $fruit['fact'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>
