<?php



$students = array(array("Randall", "Frisk", 27), array("Michael", "Choi", 33), array("Charles", "Holloman", 27));

for($i = 0; $i < count($students); $i++){
	for($j = 0; $j < count($students[$i]); $j++){
		echo $students[$i][$j] . ' ';
	}
	echo '<br />';
}

var_dump($students);

$new_students = array(array("first_name" => "Randall", "last_name" => "Frisk", "age" => 27), array("first_name" => "Michael", "last_name" => "Choi", "age" => 33), array("first_name" => "Charles", "last_name" => "Holloman", "age" => 27));

foreach ($new_students as $row){
	foreach($row as $key => $value){
		echo $key . ' ' . $value . ' ';
	}
	echo '<br />';
}

// $students = array("Randall", "Michael", "Charles");

// for($i = 0; $i < count($students); $i++){
// 	echo $students[$i] . '<br />';
// }

// outer loop is a row
// for($i = 0; $i < 10; $i++){
// 	// inner loop is a column
// 	for($j = 0; $j < 5; $j++){
// 		echo $j;
// 	}
// 	echo '<br />';
// }

?>