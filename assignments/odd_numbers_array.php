<?php

$odd_numbers = array();

for($i = 0; $i <= 20000; $i++){
	if($i % 2 == 1){
		// takes the odd numbers array and pushes i into it.
		array_push($odd_numbers, $i);
	}
}
var_dump($odd_numbers);

?>