<?php

$filename = "E:/1. Ostad for me/0. Practice/ostad-practice-php-laravel/practice_05/riya/data/text.txt";
$fp = fopen( $filename, 'r' );
$line = fgets( $fp );
fclose( $fp );
echo $line;