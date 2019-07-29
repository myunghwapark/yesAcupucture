<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 28/06/2019
 *    Purpose: Delete booking
 **/

  	require('../database/database.php');
  	require('../database/booking_query.php');

	try {
	    $bookingSeqNo = $_POST['bookingSeqNo'];

		$result = deleteBooking($bookingSeqNo);
		
		
		if ($result == 1) {
			echo "success";
		}
		else {
			echo $result;
		}
	}
	catch (Exception $e) {
	    echo $e->getMessage();
	}

	

?>