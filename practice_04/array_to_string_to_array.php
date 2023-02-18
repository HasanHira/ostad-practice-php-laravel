<?php
// String to array by delimiter
$foods = "Water, Tea, Coffee, Juice";
echo $foods ."\n";
// To array
$arr_foods = explode(", ", $foods);
echo $arr_foods[2];
echo "\n".count($arr_foods);
echo "\n------------ \n";

//Array to string
$reFoods = join(", ",$arr_foods);
echo $reFoods;
echo "\n------------ \n";
//
/**
 * String to array by multiple delimiter
 */
$vagitables = preg_split("/, |,/","Potato, Carrot, Brinjal,Onion,Chili, Ginger,Rosemerri");
print_r($vagitables);
echo count($vagitables);