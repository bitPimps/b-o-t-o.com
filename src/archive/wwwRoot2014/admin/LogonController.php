<?php
include("../secured/config/phpConfig.php");
include("../secured/phpinclude/common_db.php");
include("../secured/phpinclude/classes/UserIdentity.php");

$msg = "";

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

// Select  				 
$sql = 	"SELECT COUNT(id) AS consultNum" .
				" FROM UserIdentities WHERE(username='" . $username . "' AND password='" . $password . "')";

$recordSetId		= mysql_query($sql, $dbConn);
if (!$recordSetId)
	handleDbError_die();

$recordSet			= mysql_fetch_row($recordSetId);
$consultNum			= $recordSet[0];

// Close DB Connection
mysql_close($dbConn);

if($consultNum == 0)
{
	header("Location: index.php?msg=Invalid%20Logon");
	return;
}
else
{
	// Connect to Database
	$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);
	
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$sql =	"SELECT id, username, password" .
					" FROM UserIdentities" . 
					" WHERE (username='" . $username . "' AND password='" . $password . "')";	

	$recordSetId 		= mysql_query($sql, $dbConn);
		if (!$recordSetId)
			handleDbError_die();

	$recordSet		= mysql_fetch_array($recordSetId);
	$aUser = new UserIdentity($recordSet);

	session_start();
	$user = $aUser->getId();
	header("Cache-control: private"); // IE 6 Fix
	$_SESSION['user'] = $user;

	// Close DB Connection
	mysql_close($dbConn);

	header("Location: home.php");
	//die();
}
?>