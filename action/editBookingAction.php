<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 28/06/2019
 *    Purpose: Edit booking
 **/

  require('../database/database.php');
  require('../database/booking_query.php');

	$bookingSeqNo = $_POST['bookingSeqNo'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$bookingDate = $_POST['bookingDate'];
	$bookingTime = $_POST['bookingTime'];
	$serviceTypeSeqNo = $_POST['serviceType'];
	$description = $_POST['description'];
	$bookingStatus = $_POST['bookingStatus'];

	$result = updateBooking($bookingSeqNo, $firstName, $lastName, $bookingDate, $bookingTime, $serviceTypeSeqNo, $description, $bookingStatus);
	
	
	if ($result == 1) {
		echo "success";
	}
	else {
		echo $result;
	}

?>