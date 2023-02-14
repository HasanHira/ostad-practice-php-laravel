<?php
#01
function add_twoNumbers($num1, $num2) {
    $res = $num1 + $num2;
    return $res;
}
$x = "add_twoNumbers";
echo $x(60,30);

echo PHP_EOL;
echo "===========\n";

#02
/**
 * Determines is the argument even or odd
 */
function isEven($num){
    if($num%2==0){
        return true;
    }else{
        return false;
    }
}

$num = 13;
if(isEven($num)){
    echo "{$num} is an Even Number";
}else{
    echo "{$num} is a Odd Number";
}
echo PHP_EOL;
echo "===========\n";

#03
/**
 * Print student name
 */
function printStudentName($name){
    echo "{$name}, \n";
}
printStudentName("Rabbil");
printStudentName("Hasin");
printStudentName("Hira");

echo PHP_EOL;
echo "===========\n";

#03 Factorial
/**
 * From here we start functions file include from outer
 */
include_once "functions.php";

$num = 5; // If it is not integer, errors - parse & syntex.

echo "The factorial of {$num} is : ".calcFactorial($num);

echo PHP_EOL;
echo "===========\n";

#03 Default perameter value
/**
 * Function : Serve()
 */
$fn = "Pizza";
$i = "5 portions";

 echo serveMe();