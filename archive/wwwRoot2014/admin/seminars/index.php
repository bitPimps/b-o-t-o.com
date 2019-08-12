<?php
include("../../secured/phpinclude/logonCheck.php");
include("../../secured/config/phpConfig.php");
include("../../secured/phpinclude/common_db.php");
include("../../secured/phpinclude/classes/Seminar.php");
include("../../secured/phpinclude/classes/SeminarSR.php");

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

// Get SeminarSR
$seminarSR = new SeminarSR($dbConn, 0, 5000, $searchCountry, $sortBy, $publishedOnly);
$seminars = $seminarSR->getSeminars();

// Close DB Connection
mysql_close($dbConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>B-O-T-O.com Administration</title>
<link rel="stylesheet" type="text/css" href="../../css/admin.css" />
<script type="text/javascript" src="../../js/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	 $(".stripeMe tr").mouseover(function(){$(this).addClass("over");}).mouseout(function(){$(this).removeClass("over");});
	 $(".stripeMe tr:even").addClass("alt");
});
</script>
</head>

<body>
<div id="container">
	<?php include_once("../includes/logo.php"); ?>
	<?php include_once("../includes/nav_main.php"); DrawNavMain("Seminars"); ?>
	<div class="clear"></div>
	<div id="sidebar">
		<h2>Administration</h2>
		<ul>
			<li><a href="index.php" title="Manage Seminar Schedule" class="nav_sub_on">Manage Seminar Schedule</a></li>
			<li><a href="controller.php" title="Add New Seminar Schedule">Add New Seminar Schedule</a></li>
		</ul>
	</div>
	<div id="content">
		<h2>Manage Seminar Schedule</h2>
		<p>Click the <img src="../../css/images/icons/edit.png" alt="Edit" name="img_edit" width="16" height="16" border="0" id="img_edit" /> icon to edit the job details.</p>
		<?php if (isset($_REQUEST['msg'])){ ?><div class="form_notice"><?php echo $_REQUEST['msg']; ?></div><?php } ?>
		<table width="640" border="0" cellspacing="0" cellpadding="3" id="tbl_list" class="stripeMe">
			<tr>
				<th scope="col">Country</th>
				<th scope="col"><div align="center">Active</div></th>
				<th scope="col"><div align="center">Edit</div></th>
			</tr>
			<?php
			for ($i = 0; $i<count($seminars); $i++)
			{
			?>
			<tr>
				<td><?php echo $seminars[$i]->getCountry(); ?></td>
				<td><div align="center"><?php if ($seminars[$i]->getPublishFlag()==1){ ?><img src="../../css/images/icons/active.png" alt="Active" name="img_status" width="16" height="16" id="img_status" /><?php } else { ?><img src="../../css/images/icons/inactive.png" alt="Inactive" name="img_status" width="16" height="16" id="img_status" /><?php } ?></div></td>
				<td><div align="center"><a href="controller.php?id=<?php echo $seminars[$i]->getId(); ?>"><img src="../../css/images/icons/edit.png" alt="Edit" name="img_edit" width="16" height="16" border="0" id="img_edit" /></a></div></td>
			</tr>
			<?php
			}
			if(count($seminars)==0)
			{
			?>
			<tr>
				<td colspan="3">No seminars have been created.</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
	<?php include_once("../includes/footer.php"); ?>
</div>
</body>
</html>
