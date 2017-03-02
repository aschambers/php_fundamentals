<ul>
<?php

$list = array('apples', 'bananas', 'grapes');

function print_lists($array)
{
	for($i = 0; $i < sizeof($array); $i++)
	{
		echo '<li>' . $array[$i] . '</li>';
	}
}

print_lists($list);

?>
</ul>