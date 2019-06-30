<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "dbYesClinic";
/*
	$host = "fdb23.biz.nf";
	$database = "2881586_alice";
	$user = "2881586_alice";
	$password = "aldtkfkd2043";
	*/
	$connection = mysqli_connect($host, $user, $password, $database);
	mysqli_set_charset($connection, "utf8");

	
?>