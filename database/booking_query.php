<?php


	function getBookingList() {
		
		global $connection;
		$query = "Select bookingSeqNo, email, firstName, lastName, date_format(bookingDate, '%d-%m-%Y') as bookingDate, bookingTime,  description, (select serviceTypeEn from tbService where serviceSeqNo = A.serviceTypeSeqNo) serviceType,
		(select codeName from tbCommonCode where codeNo = bookingStatus) bookingStatus, bookingStatus as bookingStatusCode, phoneNumber, createDate from tbBooking A";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);

			if($connection) {
				mysql_close($connection);
			}
		}
		
		return $result;
	}

	function getBookingDetail($bookingSeqNo) {
		
		global $connection;
		$query = "Select bookingSeqNo, email, firstName, lastName, date_format(bookingDate, '%d-%m-%Y') as bookingDate, bookingDate as bookingDateForm, bookingTime,  description, (select serviceTypeEn from tbService where serviceSeqNo = A.serviceTypeSeqNo) serviceType, serviceTypeSeqNo,
		(select codeName from tbCommonCode where codeNo = bookingStatus) bookingStatus, bookingStatus as bookingStatusCode, phoneNumber, createDate from tbBooking A where bookingSeqNo = ".$bookingSeqNo;
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function getBookingStatusList() {
		
		global $connection;
		$query = "Select codeName, codeNo from tbCommonCode where codeGroup = 'G002'";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
			 
			if($connection) {
				mysql_close($connection);
			}
		}
		
		return $result;
	}

	function getReservedBookingTime($bookingDate) {
		
		global $connection;
		$query = "Select bookingTime from tbBooking where bookingDate = '$bookingDate';";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function insertBooking($firstName, $lastName, $bookingDate, $bookingTime, $email, $phoneNumber, $serviceTypeSeqNo, $description, $bookingStatus) {
		global $connection;
		$query = "Insert into tbBooking(firstName, lastName, bookingDate, bookingTime, email, phoneNumber, serviceTypeSeqNo, description, bookingStatus, createDate) values('$firstName', '$lastName', '$bookingDate', '$bookingTime', '$email', '$phoneNumber', '$serviceTypeSeqNo', '$description', '$bookingStatus', NOW());";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function updateBooking($bookingSeqNo, $firstName, $lastName, $bookingDate, $bookingTime, $serviceTypeSeqNo, $description, $bookingStatus) {
		global $connection;
		$query = "Update tbBooking set firstName='$firstName', lastName='$lastName', bookingDate='$bookingDate', bookingTime='$bookingTime', serviceTypeSeqNo='$serviceTypeSeqNo', description='$description', bookingStatus='$bookingStatus', updateDate=NOW() where bookingSeqNo='$bookingSeqNo';";

		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}

	function deleteBooking($bookingSeqNo) {
		global $connection;
		$query = "Delete from tbBooking where bookingSeqNo='$bookingSeqNo';";

		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		return $result;
	}


?>