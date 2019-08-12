<?php
include_once("includes/cookie_language.php");
include_once("secured/config/phpConfig.php");
include_once("secured/phpinclude/common_db.php");
include_once("secured/phpinclude/classes/ContactInfo.php");

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

// Get Contact Info
$info = getContactInfo($dbConn, 1);

// Close DB Connection
mysql_close($dbConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boto: Barral Osteopathic Teaching Organization</title>
<link rel="stylesheet" href="css/global.css" type="text/css" />
<?php include_once("includes/google_analytics.php"); ?>
</head>

<body>
<div id="container">
	<?php
	include_once("includes/nav_main.php");
	DrawNavMain("Contact");
	?>
	<div id="container_middle">
		<div id="container_content">
			<div id="sidebar_left">
				<div style="width:217px; float:right; text-align:right; margin:20px 0;">
					<img src="images/jean-pierre_barral.jpg" name="img_jpb" width="150" id="img_jpb" />
					<div style="color:#4d0b0c; margin-top:7px;">Jean-Pierre Barral<br />DO, MRO(F), PT</div>
				</div>
				<h1>Questions Regarding Specific Health Issues</h1>
				<p>Often we receive inquiries regarding whether one of our modalities can help with a person's specific health or pain condition. In order to fully determine this, it is important to be personally evaluated by a qualified practitioner. You can search for a practitioner near you by going to our alumni directory at <a href="http://www.iahp.com/pages/search/index.php" title="Search Our Alumni Directory" target="_blank">www.iahp.com</a>. Enter the first 3 numbers of your zipcode and your state, province or country. This will show you the practitioners near you and the courses they have attended.</p>
			</div>
			<div id="content">
				<h1>Barral Osteopathic Teaching Organization</h1>
				<p style="margin-top:0;"><?php echo html_entity_decode($info->getInfoBoto()) ?></p>
				<h1>Barral Institute</h1>
				<p style="margin-top:0;"><?php echo html_entity_decode($info->getInfoBi()) ?></p>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php include_once("includes/footer.php"); ?>
</div>
<form name="langSwitch" method="post" action="<?php echo basename($_SERVER['PHP_SELF']) ?>">
<input type="hidden" name="langSelected" />
</form>
</body>
</html>
