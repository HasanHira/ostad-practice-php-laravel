<?php
//Write and Describe any (two) 2 stages of the SDLC model?

/* What is Agile Model? Write a short description of it.
*/

// write a php function called gcd that takes two integer parameters a and b, and returns their greatest common divisor (GCD). The GCD is the larest positive integer that divides both a and b without leaving a remainder.

// Test data:
// $gcd=gcd(12, 18);
// echo $gcd; //output: 6

// function gcd($a, $b) {
//     if ($b == 0) {
//       return $a;
//     } else {
//         $a = $a % $b;
//       return gcd($b,$a);
//     }
//   }

// $gcd = gcd(12, 18);
// echo $gcd;



// function gcd($a, $b) {
//     while ($b != 0) {
//         $t = $b;
//         $b = $a % $b;
//         $a = $t;
//     }
//     return $a;
// }


// write a php function called gcd that takes two integer parameters a and b, and returns their greatest common divisor (GCD). The GCD is the larest positive integer that divides both a and b without leaving a remainder.

// Test data:
// $gcd=gcd(12, 18);
// echo $gcd; //output: 6

function gcd($a, $b) {
    
    $a = abs($a);
    $b = abs($b);
  
    
    if ($a < $b) {
      list($a, $b) = array($b, $a);
    }
  
    
    while ($b > 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
    }
  
   
    return $a;
  }

  echo gcd(12,18);