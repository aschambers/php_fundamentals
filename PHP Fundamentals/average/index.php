<?php

$numbers = array(34, 5, 777, 33, 4, 5);

function print_average($array)
{
	$sum = 0;
	for($i = 0; $i < sizeof($array); $i++)
	{
		$sum += $array[$i];
	}
	$average = $sum / sizeof($array);
	return $average;
}

echo "The average of the array of numbers in the numbers array is: " . print_average($numbers);

?>














