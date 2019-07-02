<?php
/*
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "dbYesClinic";
*/
	$host = "us-cdbr-iron-east-02.cleardb.net";
	$database = "heroku_b122921a09b1106";
	$user = "b50e171117478c";
	$password = "a6552593";
	
	$connection = mysqli_connect($host, $user, $password, $database);
	mysqli_set_charset($connection, "utf8");

	
?>