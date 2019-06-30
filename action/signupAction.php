<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 27/06/2019
 *    Purpose: Sign up
 **/

  require('../database/database.php');
  require('../database/user_query.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phoneNumber = $_POST['phoneNumber'];

	$result = insertUser($email, $password, $firstName, $lastName, $phoneNumber);
	
	if ($result == 1) {
		echo "success";
	}
	else {
		echo $result;
	}

?>