<?php
extract(array_merge($_POST,$_GET));
include("../secured/phpinclude/logonCheck.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>B-O-T-O.com Administration</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css" />
</head>

<body>
<div id="container">
	<?php include_once("includes/logo.php"); ?>
	<?php include_once("includes/nav_main.php"); DrawNavMain("Home"); ?>
	<div class="clear"></div>
	<div id="sidebar">
	</div>
	<div id="content">
		<h2>Administering The Site</h2>
		<p>Use the navigation at the top to manage the different sections of the website.</p>
		<p>A sub-menu will be provided on the left-side where applicable.</p>
		<p>Any updates you make here will immediately be saved to the website.</p>
	</div>
	<?php include_once("includes/footer.php"); ?>
</div>
</body>
</html>
