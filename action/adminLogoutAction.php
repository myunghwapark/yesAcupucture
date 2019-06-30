<?php
/**
 *    Author: Myunghwa Park
 *    Date Created: 27/06/2019
 *    Purpose: Logout for admin
 **/

session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=../management/admin_login.php'>";

?>
