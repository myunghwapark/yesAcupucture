<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 27/06/2019
 *    Purpose: Logout
 **/

session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=../index.php'>";

?>
