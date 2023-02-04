<?php
// if-else statement step by step
#1 - only if: if(){} = condition only check with comparison operators
$l = 25;
if($l != 30){
    echo "It is equal 25";
}
echo "\n";

#2 - if-else: if(){}else{} = condition only check with comparison operators
$color = "Green";
if($color == "Red"){
    echo "The color is: {$color}";
}else{
    echo "You are color blind";
}
echo "\n";

#3 - if-elseif: if(){}elseif(){} = condition only check with comparison operators
$sky = "Light";
if($sky != "Light"){
    echo "It is night";
}elseif($sky == "Light"){
    echo "Good Day";
}
echo "\n";

#3 - if-elseif-els: if(){}elseif(){}else{} so on, so fourth
$n = 90;
if($n >= 100){
    echo "Century";
}elseif($n <= 100){
    echo "Between Century";
}elseif($n <= 50){
    echo "Less Half-century";
}else{
    echo "Invalid number.";
}
echo PHP_EOL;

// With conditional operators && = and, || = or, ! = not
#01
$age = 80;
if($age < 18 && $age >= 13){
    echo "You are not adult.";
}elseif($age >= 18 && $age <= 40){
    echo "You are adult.";
}elseif($age > 40 && $age <= 50){
    echo "You are older";
}elseif($age > 50){
    echo "You are old";
}
echo PHP_EOL;

#02
$food = "Apple";
if("Rice" == $food || "Wheat" == $food){
    echo "{$food} contains Curb.";
}elseif("Beef" == $food || "Milk" == $food){
    echo "{$food} contains protein.";
}else{
    echo "We do not know about {$food}.";
}