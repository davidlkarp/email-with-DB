<?php
session_start();
require_once("connection.php");

if(isset($_POST['action']) && $_POST['action'] == 'submit') {
	

		if (empty($_POST['email'])) {
			$_SESSION['error'] = 'This field cannot be left blank';
			header('location: index.php');
		}
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )  {
			$_SESSION['error'] = 'That is not a valid email';
			header('location: index.php');
		}
		else { 
			$query = "INSERT INTO emails (email, created_at) VALUES(' ".$_POST['email']." ', NOW() )";

			mysqli_query($connection, $query);
			header('location: index.php');
		}
	
}



?>