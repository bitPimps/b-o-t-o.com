<?php
extract(array_merge($_POST,$_GET));
include("../../secured/config/phpConfig.php");
include("../../secured/phpinclude/common_db.php");
include("../../secured/phpinclude/classes/ContactInfo.php");

$msg = "";

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

if($action=="Update")
{
	$contactInfo = new ContactInfo("");

	if ($infoBoto == "" && $infoBi == "")
		$msg = "Please provide contact information for either BOTO or BI";

	$contactInfo->setId($id);
	$contactInfo->setInfoBoto($infoBoto);
	$contactInfo->setInfoBi($infoBi);

	if ($msg != "")
	{
		include("index.php");
		return;
	}
	$msg = $contactInfo->save($dbConn);
	// Close DB Connection
	mysql_close($dbConn);
	
	if ($msg == "")
	{
		header("Location: index.php?msg=Contact%20Information%20Saved&good=true");
		die();
	}
	else
	{
		include("index.php");
	}
}

else if (!isset($contactInfo) && isset($id))
{
	$contactInfo = getContactInfo($dbConn, $id);
	// Close DB Connection
	mysql_close($dbConn);
	include("index.php");
}

if (!isset($contactInfo))
{
	$contactInfo = new ContactInfo("");
	// Close DB Connection
	mysql_close($dbConn);
	include("index.php");
}
?>