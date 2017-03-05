<?php 

session_start();

function get_gold($min, $max)
{
	return rand($min, $max);
}

// to reset the form
if(isset($_POST['action']) && $_POST['action'] == 'restart')
{
	session_destroy();
	header('location: index.php');
}

// to set the amount of gold to 0.
if(!isset($_SESSION['gold_count']))
{
	$_SESSION['gold_count'] = 0;
}

if(isset($_POST['building']))
{
	$building = $_POST['building'];
	$gold_count = 0;
	$activity = array();
	$class = 'green';

	switch ($building) {
		case 'farm':
			$gold_count = get_gold(10, 20);
		break;
		case 'cave':
			$gold_count = get_gold(5, 10);
		break;
		case 'house':
			$gold_count = get_gold(2,5);
		break;
		case 'casino':
			$win = rand(0,100);
			if($win <= 70)
			{
				$gold_count = get_gold(-50,-1);
				$class = 'red';
				$message = 'Ouch';
			}
			else 
			{
				$gold_count = get_gold(1,50);
				$class = 'red';
				$message = 'Nice';
			}
		break;

	}
}

$_SESSION['gold_count'] += $gold_count;

$_SESSION['activity'][] = "<span class='" . $class . "'> You entered a " . $building . " and earned " . $gold_count . " golds.<br />";
	(($building == 'casino') ? "..." . $message . "..." : "") . " (" . date('M d, Y h:ia') . ")<span><br>";

header('location: index.php');
exit();





?>