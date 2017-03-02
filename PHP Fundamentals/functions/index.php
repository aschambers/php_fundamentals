<?php

// able to take code and perform a function when called.
function print_array($array)
{
	echo "There are " . count($array) . " values in the array. <br />";
	foreach($array as $value)
	{
		echo $value . "<br />";
	}
}

$myarray = array("abc", "def", "ghi");

echo print_array($myarray);

$otherarray = array("Alan", "Ryan", "Nathan");

echo print_array($otherarray);

?>