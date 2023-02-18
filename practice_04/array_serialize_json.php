<?php
$student = array(
    'fname'      => "Hasanuzzaman",
    'lname'      => "Hira",
    'age'        => '43',
    'eyecolor'   => "brown",
    'occupation' => "developer",
    'earning'    => 45000
);
echo $student['fname'] . " " . $student['lname'] . "\n";
// print_r($student);
printf( "%s %d %s", $student['fname'], $student['earning'], "\n\n" );
// $student = join($student);
// echo $student;

$seri_student = serialize($student);
echo "serialized data of the array is:\n\n" . $seri_student;

$unseri_student = unserialize($seri_student);
echo "\n\nunserialized data to array is:\n";
print_r($unseri_student);
echo PHP_EOL;

echo "\n--------- Json form --------\n";
/**
 * Now in Json form
 * array to string to array $student
 */

$json_student = json_encode($student);
echo "Array to json is:\n". $json_student;
echo PHP_EOL;
$obj_json_student = json_decode($json_student);
echo "\n*** Json to array and it turn into object is: \n\n";
print_r($obj_json_student);

#To avoid object part pass an true
$arr_json_student = json_decode($json_student,true);
echo "\n*** Json to array is: \n\n";
print_r($arr_json_student);

