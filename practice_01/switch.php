<?php
$n = 121;
$r = $n %= 2;

switch ( $r ) {
case 0:
    echo "It is an Even number";
    break;
default:
    echo "It is a Odd number";
}
echo PHP_EOL;

// ...
$color = "green";

switch ( $color ) {
case "red":
case "green":
    echo "{$color} is my favorite color.";
    break;
case "yellow":
    echo "{$color} is not, that I like.";
    break;
default:
    echo "{$color} is okay.";
}