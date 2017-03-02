<?php
$first_name = 'Alan';
$last_name = 'Schambers';
// echo $first_name;
// echo $last_name;

$occupation = 'Instructor';

// only double quotes will recoqnize variables.
echo "My name is $first_name $last_name and my occupation is $occupation";
// you use a period rather than a plus in php to concat strings and variables.
echo 'My name is ' . $first_name . ' ' . $last_name . ' and my occupation is ' . $occupation;

$num1 = 5;
$num2 = 7;
$result = $num1 + $num2;
echo $result;

$a = true;
$b = false;
// $arr1 = [];
// $arr1.push($num1);
// echo $arr1;

// will output path to document root on screen.
echo $_SERVER['DOCUMENT_ROOT'];
?>