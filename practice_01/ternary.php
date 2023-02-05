<?php
// Ternary operator examples with if statements
$num = 13;
if ( 12 == $num ) {
    echo "Twelve";
} elseif ( 10 == $num ) {
    echo "Ten";
} else {
    echo "A number";
}
echo "\n";

//ternary
$numInWord = ( 12 == $num ) ? "Twelve" : (  ( 10 == $num ) ? "Ten" : "A number" );
echo $numInWord;