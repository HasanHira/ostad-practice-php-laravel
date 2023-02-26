<?php
/*
Write a PHP function to find the longest word in a string?
Hints:
// Example usage
$str="The quick brown fox jumped over the lazy dog";
echo longestWord($str);
Output: jumped
*/

function longestWord($string) {
    // Split the string into an array of words
    $words = explode(" ", $string);
    
    // Initialize a variable to hold the current longest word
    $longest_word = "";
    
    // Loop through each word and check if it is longer than the current longest word
    foreach ($words as $word) {
      if (strlen($word) > strlen($longest_word)) {
        $longest_word = $word;
      }
    }
    
    // Return the longest word
    return $longest_word;
  }
  $str = "The quick brown fox jumped over the lazy dog";
  echo longestWord($str); // Output: jumped
    
