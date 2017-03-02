<?php

$numbers = array(40,20,-3,67,5,-4,7,66,-5,54,45);

function get_max_and_min($array)
{
	$min = $array[0];
	$max = $array[0];
	for($i = 0; $i < sizeof($array); $i++)
	{
		if($array[$i] > $max){
			$max = $array[$i];
		} 
		if($array[$i] < $min){
			$min = $array[$i];
		} 
	}
	echo "The minimum number in the array is: " . $min . "<br />";
	echo "The maximum number in the array is: " . $max . "<br />";
}
get_max_and_min($numbers);

?>