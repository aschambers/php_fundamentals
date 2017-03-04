<html>
<head>
	<title>Demo Product</title>
</head>
<body>

	<h1>Product Demo</h1>

	<form action='process.php' method='post'>
		Your Name: <input type='text' name='name'></input>
		Email: <input type='text' name='email'></input>
		Purchasing
			<select name='item'>
				<option value='CodingDojo_Shirt'>CodingDojo Shirt</option>
				<option value='CodingDojo_Cup'>CodingDojo Cup</option>
			</select>
		Quantity: <input type='text' name='quantity' />
		<input type='submit' value='Purchase'>
	</form>
</body>
</html>