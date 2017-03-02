<?php

$str = "I am a string with MANY wOrds";

// prints the length of $str.
echo strlen($str);
echo ('<br />');
// makes string lowercase
echo strtolower($str . '<br />');
// makes string uppercase
echo strtoupper($str . '<br />');
// make the first character in each word uppercase
echo ucwords($str . '<br />');
// replaces the word string with alan wherever it appears in $str
echo str_replace('string', 'alan', $str) . '<br />';
// replaces the word string with alan and only prints alan
echo str_replace($str, '%string%', 'alan') . '<br />';
// looks for the word with, and displays everything after that (way to split strings)
echo stristr($str, 'with');
echo ('<br />');
// looks for the word and what position it is in
echo "The first occurence of the word string is at position: " . strpos($str, 'string');
echo ('<br />');
// splits the string into words wherever a space occurs
$arr = explode(' ', $str);
var_dump($arr);

foreach($arr as $index => $value){
	echo "Index: " . $index . ", Value: "  . $value . "<br />";
}

$new = array();

$arr2 = implode($str, $new);
var_dump($arr2);

// shuffle - shuffles the array
// sort - sorts the array
// count - counts the number of rows in the array
// explode - breaks string into multiple values in the array
// implode - joins information in the array as a string
// array_pop - remove the last element in an array
// array_push - adding elements into an array

// is_numeric(num) - returns true or false depending on whether or not the value is a number
// rand(start, end) - generates a random number

// is_numeric(num) - returns true or false depending on whether or not the value is a number
// rand(start, end) - generates a random number

?>























