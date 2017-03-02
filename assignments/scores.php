<?php

for($i = 0; $i < 101; $i++){
	$score = rand(50, 100);
	if($score < 60){
		echo "<h1>You got a " . $score . ", and earned an F!</h1>";
	} else if($score > 59 && $score < 70){
		echo "<h1>You got a " . $score . ", and earned a D!</h1>";
	} else if($score < 80 && $score > 69){
		echo "<h1>You got a " . $score . ", and earned a C!</h1>";
	} else if($score < 90 && $score > 79){
		echo "<h1>You got a " . $score . ", and earned a B!</h1>";
	} else {
		echo "<h1>You got a " . $score . ", and earned a A!</h1>";
	}
}

?>