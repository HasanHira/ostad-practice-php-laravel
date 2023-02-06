<?php
$marks = 12;

if($marks >= 60 && $marks <=100 ){
echo "First Division";
}elseif($marks >= 45 && $marks <= 59){
echo "Second Division";
}elseif($marks >= 33 && $marks <= 44){
echo "Third Division.";
}elseif($marks <= 32){
echo "Failed.";
}