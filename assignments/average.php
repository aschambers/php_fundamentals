<?php 

$numbers = array(1,2,5,10,255,3);

var_dump($numbers);

// initialize the sum to be 0
$sum = 0;

for($i = 0; $i < sizeof($numbers); $i++){
	$sum += $numbers[$i];
}
// find average of array
$average = $sum / sizeof($numbers);
// print out the average
echo $average;

// another way to write using foreach loop.

// foreach($numbers as $value){
// 	$sum += $value;
// }
// $average = $sum / sizeof($numbers);
// echo $average;

?>