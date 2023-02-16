<?php
// Write a php function that take a sentence as a input and returns the numbers of vowels in the strings.

function count_vowels( $sentence ) {
    $vowelsR = array( "a", "e", "i", "o", "u" );
    $sentence = strtolower( $sentence );
    $lCount = strlen( $sentence );
    $total = 0;
    // echo substr($sentence, 4, 1);
    for ( $i = 0; $i <= $lCount; $i++ ) {
        if ( in_array( substr( $sentence, $i, 1 ), $vowelsR ) ) {
            $total++;
        }
    }
    return $total;

}

$sentence = "i love my country and its called bangladesh.";
echo "The numbes of vowel is: " . count_vowels( $sentence );