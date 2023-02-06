<?php
// arithmatic operators
$x = 12;
$y = 5;
$z = $x + $y; // $z = 12 + 5 // arithmatic operator signs + - * / %
echo $z, "\n";
// assignment operators
$num = 5;
$num = $num + 1;
echo "\n";
echo $num;
echo "\n";
echo "\n";

$number = 3; // $number = $number + 1 // assignment ( = ) // also use in + - * / %
$number += 1; // $number = $number + 1 // assignment ( = ) // also use in + - * / %

$number++; // $number + 1 // increment operator ++
$number--; // $number + 1 // decrement operator --
echo $number;

echo "\n";

echo "The signs (+ - * etc.) called operator. OPERATOR & OPERAND complete the operation.", "\n";
echo "\n";

// some new
#01.
$a = $b = $c = 7; // means $a = 7, $b = 7 also $c = 7; 
echo "{$b}\n";
echo "\n";

#02. (post-increment)
$n = 7;
$m = $n++; // means $m = $n then $n = $n + 1; // ($m = $n).. $n = $n++
// $x = 4;
// $x /=2;
echo "m is: {$m}"." and n is: {$n}"."\n";
echo "\n";

#03. (pre-increment)
$p = 7;
$q = ++$p; // means, first $p = $p + 1 then $q = $p; // $p = $p++ ..($q = $p)
// $x = 4;
// $x /=2;
echo "q is: {$q} and p is: {$p}\n";
echo "\n";