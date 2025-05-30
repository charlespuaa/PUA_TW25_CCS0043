<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUA | contact directory</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <h1>Contact Directory</h1>

    <?php
    // define the contact list
    $contactList = [
        [
            'fullName' => 'Jisoo Kim',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStxKuFipuiz18ApYwQFDnZNliGvvS0jEXqnw&s',
            'years' => 29,
            'dob' => '1995-01-03',
            'phone' => '09010010001'
        ],
        [
            'fullName' => 'Jennie Kim',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTwOJa3YFS16OmWI_JJB4isV2nHgvKcSlOEQ&s',
            'years' => 28,
            'dob' => '1996-01-16',
            'phone' => '09020020002'
        ],
        [
            'fullName' => 'Rosé (Park Chaeyoung)',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_QSpM2qfk7uQrexJMJZHJTIUUgPqu3cAlJg&s',
            'years' => 27,
            'dob' => '1997-02-11',
            'phone' => '09030030003'
        ],
        [
            'fullName' => 'Lisa Manoban',
            'photo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlAB6f5nlw3vU78fJOFbbDwO868AUojnAkyHFVoHgQLor2p649CRYfCEtUrnLdFO1bW0M&usqp=CAU',
            'years' => 27,
            'dob' => '1997-03-27',
            'phone' => '09040040004'
        ],
        [
            'fullName' => 'Benedict Collo',
            'photo' => 'https://scontent.fmnl16-1.fna.fbcdn.net/v/t39.30808-6/429654869_2368100990067510_3564425483103780909_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=NV7GAWf5R9AQ7kNvwFsShjf&_nc_oc=AdmHHWc_5DvHkIn6rhDF7w5kB2_MojU0Qw1myD1LQOCEbDxCay-MjZ77SeXN3dn4rRY&_nc_zt=23&_nc_ht=scontent.fmnl16-1.fna&_nc_gid=aky_ViX4zgM0bmTQhaeCtw&oh=00_AfKTPHZ3VObaRYVch-vs0Yj47nuUFf-wPFISDn9Irg01dQ&oe=683F95F6',
            'years' => 20,
            'dob' => '2005-05-18',
            'phone' => '09050050005'
        ]
    ];

    // sort contacts by name alphabetically
    usort($contactList, fn($x, $y) => strcmp($x['fullName'], $y['fullName']));
    ?>

    <table class="contactTable">
        <thead>
            <tr>
                <th class="tableHeaderCell">#</th>
                <th class="tableHeaderCell">Name</th>
                <th class="tableHeaderCell">Photo</th>
                <th class="tableHeaderCell">Age</th>    
                <th class="tableHeaderCell">Birthday</th>
                <th class="tableHeaderCell">Phone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // render table rows for each contact
            $index = 1;
            foreach ($contactList as $person) {
                echo '<tr class="tableRow">';
                echo '<td class="tableCell">' . $index . '</td>';
                echo '<td class="tableCell">' . $person['fullName'] . '</td>';
                echo '<td class="tableCell imageCell"><img src="' . $person['photo'] . '" alt="' . $person['fullName'] . '" class="personImage"></td>';
                echo '<td class="tableCell">' . $person['years'] . '</td>';
                echo '<td class="tableCell">' . $person['dob'] . '</td>';
                echo '<td class="tableCell">' . $person['phone'] . '</td>';
                echo '</tr>';
                $index++;
            }
            ?>
        </tbody>
    </table>

</body>
</html>
