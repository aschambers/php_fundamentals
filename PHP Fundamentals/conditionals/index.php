<?php

$subject = "English";
// prints false because the subject is equal to english and not math.
var_dump($subject == 'Math');

// outputs "The class is History because $class is equal to history and not math."
$class = "Spelling";
if($class == 'Math') {
    echo "The class is Math";
} else if($class == 'Histry') {
    echo "The class is History";
} else if($class != "Math" || $class != "History"){
	echo "The class is not math or history!";
} else {
	echo "Could not find what class the student is currently in";
}

$first_name = 'Oliver';
$roles = array('guest', 'member', 'admin');
$role = 0; // The key which associates with the $roles array
switch($first_name)
{
    case 'Tom':
        $role = 1;
    break;
    case 'Severus':
        $role = 1;
    break;
    case 'Oliver':
        $role = 2;
    break;    
}
// will print hello oliver since first_name is equal to oliver, and then
// will say your role is admin since we set olivers role to 2 which is admin in array.
echo "Hello $first_name ! Your role is $roles[$role]";

for(i = )

?>