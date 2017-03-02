<?
echo 'top of file';
$name = 'Alan';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
	<h1><?php echo 'Hello!!'; ?></h1>
	<table>
   		<thead>
      		<tr>
          		<th>Name</th>
      		</tr>
   		</thead>
   		<tbody>
      		<tr>
          		<td><?php echo $name; ?></td>
      		</tr>
   		</tbody>
	</table>
</body>
</html>