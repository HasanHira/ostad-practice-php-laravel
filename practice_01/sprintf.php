<?php
// We know how to store data in a variable, we can also store return value in here.
// Let's do
$firstlName = "Hasanuzzaman"; // variable
$lastName = "Hira"; // variable
printf("My name is %s %s \n", $firstlName, $lastName);

// we can also return in below
$fName = "Hasan";
$lName = "Hira";
$fullName = sprintf("My full name is %s %s", $fName, $lName); // return in - sprintf
// Now echo
echo $fullName;

