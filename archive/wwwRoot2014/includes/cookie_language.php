<?php
//checking if form has been submitted
if (isset($_POST['langSelected']))
{
	//if yes (form is submitted) assign values from POST array to variables
	$theLang=$_POST['langSelected'];
	//set cookies
	//setcookie("langSelected",$theLang,time()+3600);
	setcookie("langSelected", $theLang, time()+3600, "/", ".b-o-t-o.com", 0, true);
}
//in case user has come for first time and cookies are not set then
if (!isset($_COOKIE['langSelected']))
{
	$langSelected = "US";
}
//if cookies are set then use them
else
{
	$langSelected = $_COOKIE['langSelected'];
}
?>