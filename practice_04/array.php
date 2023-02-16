<?php
//array
$students = array(
    "Abdur Rahman",
    "Habib",
    "Muhammad",
    "Zafor",
    73,
    "Masum",
);

/*Short-array
$students = [
    "Abdur Rahman",
    "Habib",
    "Muhammad",
    "Zafor",
    73,
    "Masum",
];
*/

// echo $students[3];
// var_dump($students);
// echo count($students);

#print with loops

$c = count( $students );
// for($i=0; $i<count($students);$i++){ // Bad practice
for ( $i = 0; $i < $c; $i++ ) {
    echo $students[$i] . "\n";
}
echo "============= \n";

#Reverse order print
for($i=$c-1;$i>=0;$i--){
    echo $students[$i]."\n";
}

#Practice from pdf
echo "Student Names:\n $students[0], $students[1], $students[2], $students[3], $students[4], and $students[5]\n";
echo "================== \n";

foreach($students as $student){
    echo "$student \n";
}