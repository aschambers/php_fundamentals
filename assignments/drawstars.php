<?php

function draw_stars($arr)
{
	for($i = 0; $i < count($arr); $i++)
	{
		if (is_int($arr[$i]))
		{
			echo str_repeat('*', $arr[$i]);
			echo "<br>";
		}
		else if (is_string($arr[$i]))
		{
			echo str_repeat($arr[$i][0], strlen($arr[$i]));
			echo "<br>";
		}
	}
}

$x = array(4, 2, 'Tom', 3, 5, 7, 25);
draw_stars($x);

?>