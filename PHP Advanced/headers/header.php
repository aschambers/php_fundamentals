<?php session_start(); ?>
<html>
<head>
	<title>Headers</title>
</head>
<body>
	<form action='process.php' method='post'>
		<input type='text' name='x'>
		<input type='text' name='y'>
		<input type='submit'>
	</form>
	<?php
		if(isset($_SESSION['sum']))
			echo $_SESSION['sum'];
	?>

</body>
</html>