<?php
$foods = array( 'rice', 'vegitables', 'fish', 'curry', 'lentil', 'milk' );
print_r( $foods );

// Slice
// $newSet=array_slice($foods,2);// Without key presurved
// $newSet=array_slice($foods,2,null,true);// With key presurved
// $newSet=array_slice($foods,-3);// With negetive offset without key
$newSet = array_slice( $foods, -4, 4, true ); // With negetive offset with key
print_r( $foods );
print_r( $newSet );

echo "\n====================\n";

$rendom = array( 'a' => 35, 'b' => 52, 'c' => 13, 'd' => 88, 17 => 55, 'e' => 41, 'f' => 72 );
print_r( $rendom );

// $checkRn = array_slice( $rendom, 3 );// Without key presurved
$checkRn = array_slice( $rendom, 3, null, true );// With key presurved
print_r( $checkRn );