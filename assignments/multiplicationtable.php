<html>
<head>
	<title>Multiplication Table</title>
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
<table>
  	<thead>
  		<tr>
		    <th style='border: 1px solid black;'></th>
		    <!-- for loop to create table headers -->
			<?php 
			
				for($thead = 1; $thead <= 9; $thead++) 
				{ 
					echo "<td>" . $thead . "</td>";
				}

			?>
			<!-- what the for loop in php will create -->
		    <!-- <th>1</th>
		    <th>2</th>
		    <th>3</th>
		    <th>4</th>
		    <th>5</th>
		    <th>6</th>
		    <th>7</th>
		    <th>8</th>
		    <th>9</th> -->
  		</tr>
  	</thead>
  	<tbody>
  		<!-- for loop to create table rows -->
  		<?php 

	  		for($i = 1; $i <= 9; $i++)
	  		{
	  			echo "<tr><td>" . $i . "</td>";
	  			for($j = 1; $j <=9; $j++)
	  			{
	  				echo "<td>" . $i * $j . "</td>";
	  			}
	  			echo "</tr>";
	  		}

  		?>
  		<!-- what the for loop in php will create -->
  		<!-- <tr>
     		<td>1</td>
     		<td>1</td>
     		<td>2</td>
     		<td>3</td>
     		<td>4</td>
     		<td>5</td>
     		<td>6</td>
     		<td>7</td>
     		<td>8</td>
     		<td>9</td>
  		</tr>
  		<tr>
      		<td>2</td>
      		<td>2</td>
     		<td>4</td>
     		<td>6</td>
     		<td>8</td>
     		<td>10</td>
     		<td>12</td>
     		<td>14</td>
     		<td>16</td>
     		<td>18</td>
  		</tr>
  		<tr>
      		<td>3</td>
      		<td>3</td>
     		<td>6</td>
     		<td>9</td>
     		<td>12</td>
     		<td>15</td>
     		<td>18</td>
     		<td>21</td>
     		<td>24</td>
     		<td>27</td>
  		</tr>
  		<tr>
      		<td>4</td>
      		<td>4</td>
     		<td>8</td>
     		<td>12</td>
     		<td>16</td>
     		<td>20</td>
     		<td>24</td>
     		<td>28</td>
     		<td>32</td>
     		<td>36</td>
  		</tr>
  		<tr>
      		<td>5</td>
      		<td>5</td>
     		<td>10</td>
     		<td>15</td>
     		<td>20</td>
     		<td>25</td>
     		<td>30</td>
     		<td>35</td>
     		<td>40</td>
     		<td>45</td>
  		</tr>
  		<tr>
      		<td>6</td>
      		<td>6</td>
     		<td>12</td>
     		<td>18</td>
     		<td>24</td>
     		<td>30</td>
     		<td>36</td>
     		<td>42</td>
     		<td>48</td>
     		<td>54</td>
  		</tr>
  		<tr>
      		<td>7</td>
      		<td>7</td>
     		<td>14</td>
     		<td>21</td>
     		<td>28</td>
     		<td>35</td>
     		<td>42</td>
     		<td>49</td>
     		<td>56</td>
     		<td>63</td>
  		</tr>
  		<tr>
      		<td>8</td>
      		<td>8</td>
     		<td>16</td>
     		<td>24</td>
     		<td>32</td>
     		<td>40</td>
     		<td>48</td>
     		<td>56</td>
     		<td>64</td>
     		<td>72</td>
  		</tr>
  		<tr>
      		<td>9</td>
      		<td>9</td>
     		<td>18</td>
     		<td>27</td>
     		<td>36</td>
     		<td>45</td>
     		<td>54</td>
     		<td>63</td>
     		<td>72</td>
     		<td>81</td>
  		</tr> -->
  	</tbody>
</table>


</html>