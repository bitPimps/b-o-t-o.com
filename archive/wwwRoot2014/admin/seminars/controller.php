<?php
extract(array_merge($_POST,$_GET));
include("../../secured/config/phpConfig.php");
include("../../secured/phpinclude/common_db.php");
include("../../secured/phpinclude/classes/Seminar.php");

$msg = "";

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

if($action=="Update")
{
	$seminar = new Seminar("");
	
	if (isset($publishFlag))
		$seminar->setPublishFlag(1);
	else
		$seminar->setPublishFlag(0);

	if ($country == "")
		$msg = "Please enter a country";

	$seminar->setId($id);
	$seminar->setCountry($country);
	$seminar->setCity($city);
	$seminar->setSeminarName($seminarName);
	$seminar->setSeminarDate($seminarDate);
	$seminar->setTeacher($teacher);
	$seminar->setSponsorBusName($sponsorBusName);
	$seminar->setSponsorName($sponsorName);
	$seminar->setAddress($address);
	$seminar->setPhone($phone);
	$seminar->setEmail($email);

	if ($msg != "")
	{
		include("edit.php");
		return;
	}
	$msg = $seminar->save($dbConn);
	// Close DB Connection
	mysql_close($dbConn);
	
	if ($msg == "")
	{
		header("Location: index.php?msg=Seminar%20Saved");
		die();
	}
	else
	{
		include("edit.php");
	}
}

else if ($action=="Delete")
{
	$msg = deleteSeminar($dbConn, $id);
	mysql_close($dbConn);

	if ($msg == "")
	{
		header("Location: index.php?msg=Seminar%20Deleted");
		die();
	}
	else
	{
		$seminar = new Seminar("");
		$seminar->setId($id);
		$seminar->setCountry($country);
		$seminar->setCity($city);
		$seminar->setSeminarName($seminarName);
		$seminar->setSeminarDate($seminarDate);
		$seminar->setTeacher($teacher);
		$seminar->setSponsorBusName($sponsorBusName);
		$seminar->setSponsorName($sponsorName);
		$seminar->setAddress($address);
		$seminar->setPhone($phone);
		$seminar->setEmail($email);
		$seminar->setPublishFlag($publishFlag);
		include("edit.php");
	}
}

else if ($action=="Cancel")
{
	header("Location: index.php?msg=Operation%20Cancelled");
}

else if (!isset($seminar) && isset($id))
{
	$seminar = getSeminar($dbConn, $id);
	// Close DB Connection
	mysql_close($dbConn);
	include("edit.php");
}

if (!isset($seminar))
{
	$seminar = new Seminar("");
	// Close DB Connection
	mysql_close($dbConn);
	include("edit.php");
}
?>