<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 27/06/2019
 *    Purpose: Make an appointment
 **/

  require('../database/database.php');
  require('../database/booking_query.php');

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$bookingDate = $_POST['bookingDate'];
	$bookingTime = $_POST['bookingTime'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$serviceTypeSeqNo = $_POST['serviceType'];
	$description = $_POST['description'];
	$bookingStatus = "G002_001";

	$result = insertBooking($firstName, $lastName, $bookingDate, $bookingTime, $email, $phoneNumber, $serviceTypeSeqNo, $description, $bookingStatus);
	
	
	if ($result == 1) {
		echo "success";
	}
	else {
		echo $result;
	}

?>