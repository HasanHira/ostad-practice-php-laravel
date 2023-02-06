<?php
// var_dump();
$name = "Earth";
var_dump($name);
echo "\n";

$country = "Bangladesh";
var_dump($country);

echo "\n";

echo "Double value at once print:";
echo "\n";
var_dump( $name, $country );

echo "\n";
echo "A way to view data type: ";
echo "\n";

$result = true;
var_dump($result);
echo "\n";

// printf();
printf("We live on %s. %s is my motherland", $name, $country);
echo "\n";
echo "\n";

// Variable prit ways;
$fName = "Md Hasanuzzaman";
$lName = "Hira";

echo "My full name is $fName $lName";
echo "\n";
echo "A way...";
echo "\n";
echo "My full name is {$fName} {$lName}\n";
echo "Another way...\n";
echo "My full name is"." ".$fName." ". "and my nick name is ".$lName.".\n";
echo "\n";
printf("We %s on %s. %s is my motherland","live", $name, $country);