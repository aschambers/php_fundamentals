<?php
// part 1
$A = array(2,4,10,16);

function multiply($arr)
{
	for($i = 0; $i < sizeof($arr); $i++)
	{
		$arr[$i] = $arr[$i] * 5;
	}
	return $arr;
}
$B = multiply($A);
var_dump($B);

// modified function that will be able to take a value and multiply each number by that value
$C = array(2,4,10,16);

function multiply2($arr, $value)
{
	for($i = 0; $i < sizeof($arr); $i++)
	{
		$arr[$i] = $arr[$i] * $value;
	}
	return $arr;
}
$D = multiply2($C, 5);
var_dump($D);

?>