<?php

$exams = array(
 array(
  'title' => 'Yellow Belt Exam',
  'language' => 'HTML & CSS'
 ),
 array(
  'title' => 'Red Belt Exam',
  'language' => 'PHP using CodeIgniter'
 ),
 array(
  'title' => 'Black Belt Exam',
  'language' => 'Ruby using Ruby on Rails'
 )
);

echo $exams[0]['title'];
//prints out 'Yellow Belt Exam'

foreach($exams as $exam) {
 echo "<p>" . $exam['title'] ."-". $exam['language'] . "</p>";
}

// better way
foreach($exams as $exam) {
 echo "<p> {$exam['title']} - {$exam['language']} </p>";
}

// another way 
foreach($exams as $exam) {
 echo "<p> $exam[title] - $exam[language] </p>";
}

?>