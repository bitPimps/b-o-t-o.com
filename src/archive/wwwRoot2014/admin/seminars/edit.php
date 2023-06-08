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
	<?php include_once("../includes/nav_main.php"); DrawNavMain("Seminars"); ?>
	<div class="clear"></div>
	<div id="sidebar">
		<h2>Administration</h2>
		<ul>
			<li><a href="index.php" title="Manage Seminar Schedule">Manage Seminar Schedule</a></li>
			<li><a href="controller.php" title="Add New Seminar Schedule" class="nav_sub_on">Add New Seminar Schedule</a></li>
		</ul>
	</div>
	<div id="content">
		<h2>Manage Seminar Schedule</h2>
		<p>The <strong>Country</strong> field is required. You will not be able to save unless the country field is filled out.</p>
		<?php if (isset($_REQUEST['msg'])){ ?><div class="form_error"><?php echo $_REQUEST['msg']; ?></div><?php } ?>
		<form name="editJob" method="post" action="controller.php">
		<input type="hidden" name="action" value="save" />
		<input type="hidden" name="id" value="<?php echo $seminar->getId() ?>" />
		<table width="100%" border="0" cellspacing="0" cellpadding="3" id="tbl_list">
			<tr>
				<th scope="row">Active:</th>
				<td><input name="publishFlag" type="checkbox" id="publishFlag" <?php if ($seminar->getPublishFlag() == 1) echo "checked=\"true\"";?> value="<?php echo $seminar->getPublishFlag()?>" /> Check for yes, leave blank for no</td>
			</tr>
			<tr>
				<th scope="row">Country:</th>
				<td><input name="country" type="text" id="country" size="50" value="<?php echo $seminar->getCountry() ?>" /></td>
			</tr>
			<tr>
				<th scope="row">City:</th>
				<td><input name="city" type="text" id="city" size="50" value="<?php echo $seminar->getCity() ?>" /></td>
			</tr>
			<tr>
				<th scope="row">Seminar Name:</th>
				<td><input name="seminarName" type="text" id="seminarName" size="50" value="<?php echo $seminar->getSeminarName() ?>" /></td>
			</tr>
			<tr>
				<th scope="row" valign="top">Seminar Date/s:</th>
				<td style="font-size:80%;"><textarea name="seminarDate" rows="12" wrap="virtual" id="seminarDate" style="width:420px;"><?php echo $seminar->getSeminarDate() ?></textarea></td>
			</tr>
			<tr>
				<th scope="row">Teacher:</th>
				<td><input name="teacher" type="text" id="teacher" size="50" value="<?php echo $seminar->getTeacher() ?>" /></td>
			</tr>
			<tr>
				<th scope="row">Business Name:</th>
				<td><input name="sponsorBusName" type="text" id="sponsorBusName" size="50" value="<?php echo $seminar->getSponsorBusName() ?>" /></td>
			</tr>
			<tr>
				<th scope="row">Sponsor Name:</th>
				<td><input name="sponsorName" type="text" id="sponsorName" size="50" value="<?php echo $seminar->getSponsorName() ?>" /></td>
			</tr>
			<tr>
				<th scope="row" valign="top">Address:</th>
				<td><textarea name="address" rows="12" wrap="virtual" id="address" style="width:420px;"><?php echo $seminar->getAddress() ?></textarea></td>
			</tr>
			<tr>
				<th scope="row">Phone #:</th>
				<td><input name="phone" type="text" id="phone" size="50" value="<?php echo $seminar->getPhone() ?>" /></td>
			</tr>
			<tr>
				<th scope="row">Email:</th>
				<td><input name="email" type="text" id="email" size="50" value="<?php echo $seminar->getEmail() ?>" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="action" value="Update" class="button" />
					&nbsp;&nbsp;&nbsp;
					<input type="submit" name="action" value="Delete" class="button" />
					<input type="submit" name="action" value="Cancel" class="button" /></td>
			</tr>
		</table>
		</form>
	</div>
	<?php include_once("../includes/footer.php"); ?>
</div>
</body>
</html>
