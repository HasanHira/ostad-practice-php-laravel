<?php
$student = array(
    'fname' => "John",
    'lname' => "Doe",
);
print_r( $student );

/**
 * Array copy by value
 * Deep Copy
 */
$newStudent = $student;
$newStudent['lname'] = "Smith";
print_r( $student );
print_r( $newStudent );

/**
 * Array copy by referance
 * Shallow Copy
 */
$changeStudent = &$student;
$changeStudent['lname']="Change";
print_r($student);
print_r($changeStudent);

// With functionj

function studentName(&$student){
    $student['fname']="Jane";
    print_r($student);
}
studentName($student);
print_r($student);