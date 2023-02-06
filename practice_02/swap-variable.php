<?php
$fName = "Hasan";
$lName = "Hira";
// This will swap variables
printf("My name is %s %s \n", $fName, $lName);
echo "\n";
// Let's swap variable
printf('My name is %2$s, %1$s %3$s', $fName, $lName, "Dev"); // double to single qout in here
echo "\n";
echo "\n";

// Argument reuse
printf('The binary equivalent is %1$d to %1$b', 123);
echo "\n";
echo "\n";

// Number fractions
$number = 43.126;
printf("Print with 2 frac = %.2f \n\n", $number);

// Number set for sum

#01 
$num4 = 652;
$numT = 32;
printf("%04d \n", $num4);
printf("%04d \n\n", $numT);

#02 
$num4 = 65.2;
$numT = 32.071; // must count with .dot
printf("%06.2f \n", $num4);
printf("%06.2f \n\n", $numT);

