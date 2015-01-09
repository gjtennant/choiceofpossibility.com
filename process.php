<?php
session_start();
include('new_connection.php');
date_default_timezone_set('America/Los_Angeles');

// email list form validations
if(isset($_POST['action']) && $_POST['action'] == 'joinEmailList')
{
	// set empty array to collect validation errors:
	$errors = array();
	// set validation errors:
	if(empty($_POST['firstname'])){$errors[] = "Please include your first name";}
	if(empty($_POST['lastname'])){$errors[] = "Please include your last name";}
	if(empty($_POST['email'])){$errors[] = "Please include your email address";}
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "Email format appears to be invalid";
	}
	if(count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
		header('location: index.php#sidebar');
		die();
	}
	else
	{
		$_SESSION['message'] = "Thanks for joining my list!";

		// escape to prevent injections:
		$firstname = escape_this_string($_POST['firstname']);
		$lastname = escape_this_string($_POST['lastname']);
		$email = escape_this_string($_POST['email']);

		// insert to database:
		$query = "INSERT INTO subscribers
					(firstname, lastname, email, created_at, updated_at)
					VALUES
					('{$firstname}', '{$lastname}', '{$email}', NOW(), NOW());";
		run_mysql_query($query);

		header('location: index.php#joinEmailList');
		die();
	}

}
?>