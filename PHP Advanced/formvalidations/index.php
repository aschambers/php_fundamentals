<?php

session_start();

?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action='process.php' method='post'>
		<input type='text' name='email' placeholder='Email'>
		<input type='password' name='password'>
		<input type='submit'>
	</form>

	<?php

	if(isset($_SESSION['errors'])) 
	{
		foreach($_SESSION['errors'] as $error)
		{
			echo $error;
		}
	}

	?>
</body>
</html>