<?php
$user = array('fname'=>"Hasan", 'lname'=>"Hira");
print_r($user);

// To remove data from Associative array
// unset()

unset($user['lname']);
print_r($user);