<?php
$i = 0;
while ( $i < 5 ) {
    echo $i . "\n";
    $i++;
}
echo "---------------- \n";

$j = 0;
while ( $j++ < 5 ) {
    echo $j . "\n";
}
echo "---------------- \n";

$x = 0;
while ( ++$x < 5 ) {
    echo $x . "\n";
}

echo "========= understanding ============ \n";


######## Expalination ###########
$x = $y = 5;    // $x = 5,      $y = 5
$x = $y++;      // $x = 5,      $y = $y + 1 (post increment)

$n = $m = 5;
$n = ++$m;      // $n = $m + 1, $m = $m + 1 (pre increment)

echo $x .":". $y;
echo PHP_EOL;
echo $n .":". $m;

