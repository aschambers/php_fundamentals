<?php 

$numbers = array(1,2,5,10,255,3);

var_dump($numbers);

$sum = 0;

// same thing as below but using foreach loop.

// $numbers = array(1,2,5,10,255,3);

// foreach($numbers as $value)
// {
// 	$sum += $value;
// }
// echo $sum;

// undefined offset error if <= sizeof($numbers), goes out of bounds.
for($i = 0; $i < sizeof($numbers); $i++){
	$sum += $numbers[$i];
}
echo $sum;

// for($i = $numbers[0]; $i <= sizeof($numbers); $i++){
// 	$sum += $numbers[$i];
// }
// echo $sum;

// echo sizeof($numbers);

?>