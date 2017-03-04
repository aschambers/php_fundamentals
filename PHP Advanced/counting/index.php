<?php

session_start();

// in session is there a key called counter, create it and set it to be 1 
if(!isset($_SESSION['counter']))
{
	$_SESSION['counter'] = 1;
}
else 
{
	$_SESSION['counter']++;
}

// var_dump($_SESSION);

?>

<html>
<head>
	<title>Counter Demo</title>
	<style type="text/css">
		body {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>You came to this website</h1>
	<h2><?= $_SESSION['counter'] ?> times</h2>
</body>
</html>































