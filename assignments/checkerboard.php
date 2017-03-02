<html>
<head>
	<title>Checkerboard</title>
	<style>
		td {
			height:40px;
			width:40px;
			border: 1px solid black;
		}
		table {
			border-collapse: collapse;
		}
		.color1 {
			background:red;
		}
		.color2 {
			background:black;
		}
	</style>
</head>
<body>
	<table>
		<thead>
		</thead>
		<tbody>
		<?php
			
			for($i = 0; $i <=9; $i++)
			{
				echo "<tr>";
				for($j = 0; $j <= 9; $j++)
				{
					if($j % 2 == $i %2)
					{
						echo "<td class='color1'>";
					}
					else 
					{
						echo "<td class='color2'>";
					}
				}
				echo "</tr>";
			}
			
		?>
		</tbody>
	</table>
</body>
</html>