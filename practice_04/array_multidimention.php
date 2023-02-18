<?php
// Multidimentional array
$arr_first = array(
    ['Monir', 'Humayun', 'Kaji', 'Faruq'],
    ['Mahfuja', 'Humaira', 'Fahmida'],
    ['Suhail', 'Tahsan', 'Abid',
        ['Munni', 'Jaynob', 'Rumi', 'Sanjida'],
        [55, 66, 77, 88,
            [000, 111, 333, 555]
        ]
]
);
// print Abid
echo $arr_first[2][2];
echo "\n==========\n";
// print rumi
echo $arr_first[2][3][2];
echo "\n==========\n";
// print 333
echo $arr_first[2][4][4][2];

/**
 * String to array and print direct
 * and add new value
 */
echo "\n==========\n";
$vehicals=[
    "bikes" => explode(', ', "FZS, Honda, Apache, Pulser"),
    "trucks" =>explode(', ', "Tata, Mahindra, Ford"),
    "cars" => explode(', ', "Toyota, Hundie, Hammer, Ferrari")
];
array_push($vehicals["cars"], "Bugatti");
echo $vehicals["cars"][4];