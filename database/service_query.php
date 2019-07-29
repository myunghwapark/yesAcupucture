<?php


	function getServiceListByLan($language) {
		$language_type;
		if($language == "kr") {
			$language_type = "serviceTypeKr";
		}
		else {
			$language_type = "serviceTypeEn";
		}
		
		$query = "Select $language_type as service, serviceStatus, serviceSeqNo from tbService;";
		
		return $query;
	}

	function getServiceList() {
		
		global $connection;
		$query = "Select serviceSeqNo, serviceTypeEn, serviceTypeKr, (select codeName from tbCommonCode where codeNo = serviceStatus) serviceStatus, serviceStatus as serviceStatusCode from tbService;";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		//mysqli_close($connection);
		return $result;
	}

	function insertService($serviceTypeEn, $serviceTypeKr, $serviceStatus) {
		global $connection;
		$query = "Insert into tbService(serviceTypeEn, serviceTypeKr, serviceStatus, createDate) values('$serviceTypeEn', '$serviceTypeKr', '$serviceStatus', NOW());";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		mysqli_close($connection);
		return $result;
	}

	function updateService($serviceSeqNo, $serviceTypeEn, $serviceTypeKr, $serviceStatus) {
		global $connection;
		$query = "Update tbService set serviceTypeEn='$serviceTypeEn', serviceTypeKr='$serviceTypeKr', serviceStatus='$serviceStatus', updateDate=NOW() where serviceSeqNo='$serviceSeqNo';";

		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		mysqli_close($connection);
		return $result;
	}

	function deleteService($serviceSeqNo) {
		global $connection;
		$query = "Delete from tbService where serviceSeqNo='$serviceSeqNo';";

		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		mysqli_close($connection);
		return $result;
	}

	function getServiceStatusList() {
		
		global $connection;
		$query = "Select codeName, codeNo from tbCommonCode where codeGroup = 'G003';";
		
		$result = mysqli_query($connection, $query);

		if($result == false) {
			 echo "error: " . mysqli_error($connection);
		}
		//mysqli_close($connection);
		return $result;
	}


?>