<?php
echo "Number System.";
echo "\n";
echo "\n";
$num = 12; // Decimal - 0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 ....
$oct = 015; // Octal - 0 1 2 3 4 5 6 7 10 11 12 13 14 15 16 17 20 21 .... 
$hex = 0x3C; // Hexadecimal - 0 1 2 3 4 5 6 7 8 9 A B C D E F
// To output in decimal number
printf ("Number system used in printf use %d and octal to decimal %d and hex to dec %d", $num, $oct, $hex);
echo "\n";
echo "\n";

// We also can convert number system one to another like below 
printf("The binery equivalent in %d to %b \n", 1231, 1231);
echo "\n";
printf("The hexadecimal equivalent in %d to %X \n", 1231, 1231);
echo "\n";
printf("The octal equivalent in %d to %o \n", 1231, 1231);