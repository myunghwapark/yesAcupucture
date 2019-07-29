<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 30/06/2019
 *    Purpose: Edit service
 **/

  	require('../database/database.php');
  	require('../database/service_query.php');

	try {
	    $serviceSeqNo = $_POST['serviceSeqNo'];
		$serviceTypeEn = $_POST['serviceTypeEn'];
		$serviceTypeKr = $_POST['serviceTypeKr'];
		$serviceStatus = $_POST['serviceStatus'];

		$result = updateService($serviceSeqNo, $serviceTypeEn, $serviceTypeKr, $serviceStatus);
		
		
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