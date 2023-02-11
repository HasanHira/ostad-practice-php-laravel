<?php
$veryOld = 0;
$old = 1;
$new = 1;
for($f=0; $f<19; $f++){
    echo "$veryOld ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}