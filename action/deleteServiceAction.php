<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 30/06/2019
 *    Purpose: Delete service
 **/

  require('../database/database.php');
  require('../database/service_query.php');

	$serviceSeqNo = $_POST['serviceSeqNo'];

	$result = deleteService($serviceSeqNo);
	
	
	if ($result == 1) {
		echo "success";
	}
	else {
		echo $result;
	}

?>