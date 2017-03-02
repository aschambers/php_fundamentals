<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function print_array($array)
{
	echo "There are 2 keys in this array: <br /> first_name <br /> last_name <br />";
	foreach($array as $key => $value)
	{
		echo "The value in the key '" . $key . "' is " . $value . "<br />"; 
	}
}

print_array($users);

?>