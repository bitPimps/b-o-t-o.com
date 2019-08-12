<?php
//check for valid logon

session_start();
header("Cache-control: private"); // IE 6 Fix
$user = $_SESSION['user'];

if($user=="-1" || $user=="")
{
	header("Location: http://www.b-o-t-o.com/admin/index.php?msg=Enter%20your%20logon%20information");
	die(); 
}	
?>
