<?php


	function getUser($email, $password) {
		global $connection;
		$query = "Select email, firstName, lastName, phoneNumber, userType from tbUser where email = '$email' and userPassword = SHA1(UNHEX(SHA1('$password')));";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function getAdmin($email, $password) {
		global $connection;
		$query = "Select email, firstName, lastName, phoneNumber, userType from tbUser where email = '$email' and userPassword = SHA1(UNHEX(SHA1('$password'))) and userType = 'G001_001';";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function getUserIdCnt($email) {
		global $connection;
		$query = "Select count(email) userIdCnt from tbUser where email = '$email';";
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function insertUser($email, $password, $firstName, $lastName, $phoneNumber) {
		global $connection;
		$query = "Insert into tbUser(email, userPassword, firstName, lastName, phoneNumber, userType, createDate) values('$email', SHA1(UNHEX(SHA1('$password'))), '$firstName', '$lastName', '$phoneNumber', 'G001_002', NOW());";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

?>