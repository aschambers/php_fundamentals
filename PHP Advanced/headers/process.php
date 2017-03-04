<?php

// this file will process things, not render, which is why we want a header.

session_start();

$sum = $_POST['x'] + $_POST['y'];

$_SESSION['sum'] = $sum;

// redirects user back to the index page on page load after setting session data for the sum
header('location: header.php');

?>