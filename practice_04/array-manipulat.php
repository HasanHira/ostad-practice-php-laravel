<?php
// Array Manipulate

$users = array(
    "Hasan",
    "Masum",
    "Jony",
    "Sumon",
    "Milon",
);
// Print users
$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo "============== \n";

// To change array value
$users[0] = "Zaman";
echo "Change array value by offset: \n";
echo PHP_EOL;

$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo "============== \n";

/**
 * To manipulate array
 * array_pop()
 * cut data form last and strore in a variable
 */
echo "array_pop()\n Collect data->store from end\n";
echo PHP_EOL;

$userName = array_pop($users);

$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo PHP_EOL;
echo "============== \n";
echo "Collected data: $userName \n";
// echo $userName;

/**
 * To manipulate array
 * array_shift()
 * cut data form start and strore in a variable
 */
echo "array_shift()\n Collect data->store from start\n";
echo PHP_EOL;

$userName = array_shift($users);

$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo PHP_EOL;
echo "============== \n";
echo "Collected data: $userName \n";
// echo $userName;

/**
 * To manipulate array
 * array_unshift()
 * add data form start and strore in a variable
 */
echo "array_unshift()\n Add data->array in start\n";
echo PHP_EOL;

array_unshift($users, 'Mahbub');

$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo PHP_EOL;
echo "============== \n";
echo "Add data: Mahbub \n";
// echo $userName;

/**
 * To manipulate array
 * array_push()
 * cut data form start and strore in a variable
 */
echo "array_push()\n Add data->array in End\n";
echo PHP_EOL;

$users[]="Al-amin"; // another way push a data at the end
array_push($users, 'Mahbub');

$count = count( $users );
for ( $i = 0; $i < $count; $i++ ) {
    echo $users[$i] . "\n";
}
echo PHP_EOL;
echo "============== \n";
echo "Add data: Mahbub \n";
// echo $userName;
