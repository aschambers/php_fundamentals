<ul>
<?php

// for loop mainly used for counting.
// foreach loop used more for iterating through an associative array.

for($i = 1; $i <= 5; $i++) {
    echo "<li>Blue car finished round $i! <ul>";
    for($k = 1; $k <= 2; $k++) {
       echo "<li> Driver just ran and finished round $k! </li>";
    }
    echo "</ul></li>";
}

?>
</ul>





