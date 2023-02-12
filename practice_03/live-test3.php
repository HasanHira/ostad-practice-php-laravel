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
function hasPairWithSum($arr, $targetSum) {
    $arrayLength = count($arr);
    for ($i = 0; $i < $arrayLength; $i++) {
      for ($j = $i + 1; $j < $arrayLength; $j++) {
        if ($arr[$i] + $arr[$j] == $targetSum) {
          return true;
        }
      }
    }
    return false;
  }
  
  $inputArray = [5, 7, 1, 2, 8, 4, 3];
  $targetSum = 5;
  
  if (hasPairWithSum($inputArray, $targetSum)) {
    echo "True\n";
  } else {
    echo "False\n";
  }

