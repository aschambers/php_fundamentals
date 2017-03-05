<?php session_start(); ?>
<html>
<head>
	<title>Ninja Gold!</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	#farm1 {
		border:1px solid black;
		height:200px;
		width:200px;
		margin-left:100px;
	}
	#farm2 {
		margin-top:40px;
		margin-left:100px;
	}
	#farm3, #farm4 {
		text-align: center;
	}
	#farm5 {
		margin-left:65px;
	}
	#cave1 {
		border:1px solid black;
		height:200px;
		width:200px;
		margin-left:320px;
		margin-top:-218px;
	}
	#cave2 {
		margin-left:100px;
	}
	#cave3, #cave4 {
		text-align: center;
	}
	#cave5 {
		margin-left:65px;
	}
	#house1 {
		border:1px solid black;
		height:200px;
		width:200px;
		margin-left:540px;
		margin-top:-218px;
	}
	#house2 {
		margin-left:100px;
	}
	#house3, #house4 {
		text-align: center;
	}
	#house5 {
		margin-left:65px;
	}
	#casino1 {
		border:1px solid black;
		height:200px;
		width:200px;
		margin-left:760px;
		margin-top:-218px;
	}
	#casino2 {
		margin-left:100px;
	}
	#casino3, #casino4 {
		text-align: center;
	}
	#casino5 {
		margin-left:65px;
	}
	#activities {
		margin-left:100px;
	}
	#activitiesbox {
		margin-left:100px;
		height:200px;
		width:860px;
	}
	.restart {
		margin-left:100px;
	}
	.green {
		color:green;
	}
	.red {
		color:red;
	}
	</style>
</head>
<body>
<h3 id='farm2'>Your Gold: <input type='text' name='gold' value="<?= isset($_SESSION['gold_count']) ? $_SESSION['gold_count'] : '0' ?>">
</input></h3>
<div class='restart'>
	<form id='restart' action='process.php' method='post'>
		<input type='hidden' name='action' value='restart'>
		<input type='submit' value='Start Over'>
	</form>
</div>
<form id="farm1" action="process.php" method="post">
	<h2 id='farm3'>Farm</h2>
	<p id='farm4'>(earns 10-20 golds)</p><br />
    <input type="hidden" name="building" value="farm" />
    <input id='farm5' type="submit" value="Find Gold!"/>
</form>
<form id="cave1" action="process.php" method="post">
	<h2 id='cave3'>Cave</h2>
	<p id='cave4'>(earns 5-10 golds)</p><br />
    <input type="hidden" name="building" value="cave" />
    <input id='cave5' type="submit" value="Find Gold!"/>
</form>
<form id="house1" action="process.php" method="post">
	<h2 id='house3'>House</h2>
	<p id='house4'>(earns 2-5 golds)</p><br />
    <input type="hidden" name="building" value="house" />
    <input id='house5' type="submit" value="Find Gold!"/>
</form>
<form id="casino1" action="process.php" method="post">
	<h2 id='casino3'>Casino!</h2>
	<p id='casino4'>(earns/takes 0-50 golds)</p><br />
    <input type="hidden" name="building" value="casino" />
    <input id='casino5' type="submit" value="Find Gold!"/>
</form>
<p id='activities'>Activities</p>
<textarea id='activitiesbox'>
<?php 

echo isset($_SESSION['activity']) ? implode('', array_reverse($_SESSION['activity'])) : "";

?>
</textarea>
</body>
</html>