<?php
include("../../secured/phpinclude/logonCheck.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>B-O-T-O.com Administration</title>
<link rel="stylesheet" type="text/css" href="../../css/admin.css" />
</head>

<body>
<div id="container">
	<?php include_once("../includes/logo.php"); ?>
	<?php include_once("../includes/nav_main.php"); DrawNavMain("Contact"); ?>
	<div class="clear"></div>
	<div id="sidebar">
		<h2>Instruction</h2>
		<p>To the right are 2 text fields. One manages BOTO contact information, and the other manages BI contact information.</p>
	</div>
	<div id="content">
		<h2>Manage Contact Information</h2>
		<p>Fill out one or both of the text fields below and click the &quot;Save&quot; button.</p>
		<?php if (isset($msg) && $msg!="" && isset($good) && $good!="" && $good=="true"){ ?><div class="form_success"><?php echo $msg; ?></div><?php } ?>
		<?php if (isset($msg) && $msg!="" && !isset($good) && $good=="" && $good!="true"){ ?><div class="form_error"><?php echo $msg; ?></div><?php } ?>
		<?php if (!isset($good) && $good=="" && $good!="true") { ?>
		<h2 class="heading">Barral Osteopathic Teaching Organization</h2>
		<form action="controller.php" method="post" name="editContact" id="editContact">
		<input type="hidden" name="id" value="<?php echo $contactInfo->getId() ?>" />
		<input type="hidden" name="action" value="Save" />
		<textarea name="infoBoto" rows="7" id="infoBoto" wrap="virtual"><?php echo $contactInfo->getInfoBoto() ?></textarea>
		<p>&nbsp;</p>
		<h2 class="heading">Barral Institute</h2>
		<textarea name="infoBi" rows="10" id="infoBi" wrap="virtual"><?php echo $contactInfo->getInfoBi() ?></textarea>
		<p>&nbsp;</p>
		<input type="submit" name="action" value="Update" class="button" />
		&nbsp;&nbsp;&nbsp;
		<input type="submit" name="action" value="Delete" class="button" />
		<input type="submit" name="action" value="Cancel" class="button" />
		</form>
		<?php } ?>
	</div>
	<?php include_once("../includes/footer.php"); ?>
</div>
</body>
</html>
