<?php

session_start();

if(isset($_POST['email']) && $_POST['email'] != null) 
{
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$errros[] = 'Email is not valid';
	}
	if(isset($_POST['password']) && $_POST['password'] != null)
	{
		$errors[] = 'Nothing entered for the password field';
	}
	else 
	{
		header('location: success.php');
	}
}
else
{
	$errors[] = "Email should not be empty!";
}

if(!empty($errors))
{
	$_SESSION['errors'] = $errors;
	header('location: index.php');
}




// if(!empty($login))
// {
// 	$_SESSION['login'] = $login;
// 	header('location: index.php');
// }

// You are logged in


?>