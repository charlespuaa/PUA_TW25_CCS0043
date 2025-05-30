<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Contact List</h1>

    <?php
    // Define array contacts to hold the data of 10 people 
    // Keys: name,image,age,birthday and contactNumber
    $contacts = [
        // Male
        [
            'name' => 'Park Bo-gum',
            'image' => 'assets/ParkBogum.webp', 
            'age' => 31, 
            'birthday' => '1993-06-16',
            'contactNumber' => '09112233445' 
        ],
        [
            'name' => 'Chris Hemsworth',
            'image' => 'assets/ChrisHemsworth.webp',
            'age' => 41, 
            'birthday' => '1983-08-11',
            'contactNumber' => '09123456789'
        ],
        [
            'name' => 'Yuki Tsunoda',
            'image' => 'assets/YukiTsunoda.jpg',
            'age' => 25, 
            'birthday' => '2000-05-11',
            'contactNumber' => '09134567890' 
        ],
        [
            'name' => 'Faker (Lee Sang-hyeok)',
            'image' => 'assets/Faker.webp',
            'age' => 29, 
            'birthday' => '1996-05-07',
            'contactNumber' => '09145678901' 
        ],
        [
            'name' => 'Tom Cruise', 
            'image' => 'assets/TomCruise.jpg', 
            'age' => 62, 
            'birthday' => '1962-07-03',
            'contactNumber' => '09156789012'
        ],
        // Female
        [
            'name' => 'Jennie Kim',
            'image' => 'assets/JennieKim.jpg',
            'age' => 29, 
            'birthday' => '1996-01-16',
            'contactNumber' => '09167890123'
        ],
        [
            'name' => 'Emma Watson', 
            'image' => 'assets/EmmaWatson.webp',
            'age' => 35, 
            'birthday' => '1990-04-15',
            'contactNumber' => '09178901234'
        ],
        [
            'name' => 'Jennifer Lawrence',
            'image' => 'assets/JenniferLawrence.jpg',
            'age' => 34, 
            'birthday' => '1990-08-15',
            'contactNumber' => '09189012345'
        ],
        [
            'name' => 'IU (Lee Ji-eun)',
            'image' => 'assets/IU.jpg',
            'age' => 32,
            'birthday' => '1993-05-16',
            'contactNumber' => '09190123456'
        ],
        [
            'name' => 'Scarlett Johansson',
            'image' => 'assets/ScarlettJohansson.jpg',
            'age' => 40, 
            'birthday' => '1984-11-22',
            'contactNumber' => '09201234567'
        ]
    ];

    // Sort the contacts array alphabetically by name
    usort($contacts, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    ?>

    <table class="contactTable">
        <thead>
            <tr>
                <th class="tableHeaderCell">No.</th>
                <th class="tableHeaderCell">Name</th>
                <th class="tableHeaderCell">Image</th>
                <th class="tableHeaderCell">Age</th>
                <th class="tableHeaderCell">Birthday</th>
                <th class="tableHeaderCell">Contact Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $count = 1;
            foreach ($contacts as $contact) {
                echo '<tr class="tableRow">';
                echo '<td class="tableCell">' . $count . '</td>';
                echo '<td class="tableCell">' . $contact['name'] . '</td>';
                echo '<td class="tableCell imageCell"><img src="' . $contact['image'] . '" alt="' . $contact['name'] . '" class="personImage"></td>';
                echo '<td class="tableCell">' . $contact['age'] . '</td>';
                echo '<td class="tableCell">' . $contact['birthday'] . '</td>';
                echo '<td class="tableCell">' . $contact['contactNumber'] . '</td>';
                echo '</tr>';
                $count++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>
