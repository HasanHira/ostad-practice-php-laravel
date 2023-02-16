<?php
/*
Write a function that takes an array of integers
 and 
 a target sum as input
 and
 returns a boolean
 indicating whether there exists a pair of integers in the array that add up to the target sum.
 
 You can assume the array has at least two elements and all elements are unique. Use a loop in your solution.
input: [5,7,1,2,8,4,3],8
output: true(because 5+3=8)
*/

//
// function pairWithSum($arr, $targetSum) {
//     $arrayLength = count($arr);
//     for ($i = 0; $i < $arrayLength; $i++) {
//       for ($j = $i + 1; $j < $arrayLength; $j++) {
//         if ($arr[$i] + $arr[$j] == $targetSum) {
//           return true;
//         }
//       }
//     }
//     return false;
//   }
  
//   $inputArray = [5, 7, 1, 2, 8, 4, 3];
//   $targetSum = 5;
  
//   if (pairWithSum($inputArray, $targetSum)) {
//     echo "True\n";
//   } else {
//     echo "False\n";
//   }


  #02 time

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

// $gcd = gcd(2, 48);
// echo $gcd;


function gcd($a, $b){
  if($b == 0){
    return $a;
  } elseif($b !=0) {
    return gcd($b,$a%$b);
  }
}

$gcd = gcd(12, 18);
echo $gcd;

