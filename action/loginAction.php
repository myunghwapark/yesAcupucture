<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 27/06/2019
 *    Purpose: Log in
 **/

  require('../database/database.php');
  require('../database/user_query.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$userType = $_POST['userType'];

	if($userType == 'G001_001') {
		$result = getAdmin($email, $password);
	}
	else {
		$result = getUser($email, $password);
	}
	
	
	if($result == false){
		die("Database access failed: " . mysqli_error()); 
	}
	else if ($result->num_rows > 0) {
		session_start();
		while($row = mysqli_fetch_assoc($result)) {
			$_SESSION['email'] = $row["email"];
			$_SESSION['firstName'] = $row["firstName"];
			$_SESSION['lastName'] = $row["lastName"];
			$_SESSION['phoneNumber'] = $row["phoneNumber"];
			$_SESSION['userType'] = $row["userType"];
		}
		echo "success";
	}
	else {
		echo "Invalid email or password.";
		//die("Database access failed: " . mysqli_error()); 
	}

?>