<?php
/* Loop : 5 types of loop example
1. For Loop
2. Foreach Loop
3. While Loop
4. Do while Loop
5. Go To Loop ( extra )*/

#01 For Loop
echo "For Loop";
echo PHP_EOL;

for ( $i = 1; $i <= 5; $i++ ) {
    echo "$i - * \n";
}

echo PHP_EOL;
#02 Foreach Loop (work with array)
echo "Foreach Loop - Cities Name";
echo PHP_EOL;

$cityNames = array( 'Dhaka', 'Rajshahi', 'Dinajpur', 'Jesore' );
foreach ( $cityNames as $city ) {
    echo "{$city} \n";
}

echo PHP_EOL;
#03 While Loop
echo "While Loop";
echo PHP_EOL;

$num = 1;
while ( $num <= 5 ) {
    echo "$num - + \n";
    $num++;
}

echo PHP_EOL;
#04 Do while Loop
echo "Do while Loop";
echo PHP_EOL;

$dig = 1;
do {
    echo "$dig - * \n";
    $dig++;
} while ( $dig <= 5 );

echo PHP_EOL;
#05 Go to Loop < init count, label: incr/decre, statement, -> if(condition) goto label: >
echo "Go to Loop";
echo PHP_EOL;

$n = 1;
label:$n++;
echo "$n - # \n";
if ( $n <= 5 ) {
    goto label;
}

#02 Loop for summation
$sum = 0;
for ( $i = 1; $i <= 100; $i++ ) {
    $sum += $i;
}
echo "The sum of the series from 1 to 100 is: {$sum}";
