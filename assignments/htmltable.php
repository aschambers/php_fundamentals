<html>
<head>
	<title>HTML Table</title>
	<style>
		td {
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<?php

$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel') 
);

?>

<table>
	<thead>
		<tr>
			<td style='font-weight:bold'>User #</td>
			<td style='font-weight:bold'>First Name</td>
			<td style='font-weight:bold'>Last Name</td>
			<td style='font-weight:bold'>Full Name</td>
			<td style='font-weight:bold'>Full Name in upper case</td>
			<td><span style='font-weight:bold'>Length of full name</span> (without spaces)</td>
		</tr>
	</thead>
	<tbody>
	<?php 
		$i = 1;
  		foreach($users as $user)
  		{
  			$length = strlen($user['first_name']) + strlen($user['last_name']);
  			echo "<tr>";
  			echo "<td style='font-weight:bold'>" . $i++ . "</td>";
  			echo "<td>" . $user['first_name'] . "</td>";
  			echo "<td>" . $user['last_name'] . "</td>";
  			echo "<td>" . $user['first_name'] . ' ' . $user['last_name'] . "</td>";
  			echo "<td>" . strtoupper($user['first_name']) . ' ' . strtoupper($user['last_name']) . "</td>";
  			echo "<td>" . $length . "</td>";
  			echo "</tr>";
  		}
	?>
</table>
</body>
</html>


