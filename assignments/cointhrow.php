<?php

$heads = 0;
$tails = 0;

for($i = 1; $i < 5001; $i++)
{
	$cointoss = rand(1,2);
	if($cointoss == 1){
		$tails++;
		echo 'Attempt #' . $i . ': It was tails! ... Got ' . $heads . ' head(s) so far and ' . $tails . ' tail(s) so far <br />';
	}
	else if($cointoss == 2){
		$heads++;
		echo 'Attempt #' . $i . ': It was tails! ... Got ' . $heads . ' head(s) so far and ' . $tails . ' tail(s) so far <br />';
	}
}

?>