<h1>Using for loop</h1>
<select>
<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

// for loop
for($i = 0; $i < sizeof($states); $i++){
	echo '<option>' . $states[$i] . '</option>';
}

?>
</select>
<h1>Using foreach loop</h1>
<select>
<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

// for each loop
foreach($states as $value){
	echo '<option>' . $value . '</option>';
}

?>
</select>
<h1>Pushing 3 new states into array</h1>
<select>
<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');

array_push($states, 'NJ', 'NY', 'DE');

for($i = 0; $i < sizeof($states); $i++){
	echo '<option>' . $states[$i] . '</option>';
}


?>
</select>