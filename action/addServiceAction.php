<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 30/06/2019
 *    Purpose: Add new service
 **/

  require('../database/database.php');
  require('../database/service_query.php');

	$serviceTypeEn = $_POST['serviceTypeEn'];
	$serviceTypeKr = $_POST['serviceTypeKr'];
	$serviceStatus = $_POST['serviceStatus'];

	$result = insertService($serviceTypeEn, $serviceTypeKr, $serviceStatus);
	
	
	if ($result == 1) {
		echo "success";
	}
	else {
		echo $result;
	}

?>