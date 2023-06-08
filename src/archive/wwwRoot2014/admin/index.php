<?php
session_start();
header("Cache-control: private"); // IE 6 Fix
$user = "-1";
$_SESSION = array();
session_destroy();
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
	<div class="clear"></div>
	<div id="sidebar">
	</div>
	<div id="content">
		<?php if (isset($_REQUEST['msg'])){ ?><div class="form_error"><?php echo $_REQUEST['msg']; ?></div><?php } ?>
		<form name="Logon" method="post" action="LogonController.php">
			<table width="100%" border="0" cellspacing="3" cellpadding="3" id="tbl_list">
				<tr>
					<th scope="row"><label for="username">Username</label></th>
					<td><input type="text" name="username" id="username" value="<?php echo $username ?>" /></td>
				</tr>
				<tr>
					<th scope="row"><label for="password">Password</label></th>
					<td><input type="password" name="password" id="password" /></td>
				</tr>
				<tr>
					<th scope="row">&nbsp;</th>
					<td><input type="submit" name="Submit" value="Submit" class="button" /> <input type="reset" name="Reset" value="Clear" class="button" /></td>
				</tr>
			</table>
			</form>
	</div>
	<?php include_once("includes/footer.php"); ?>
</div>
</body>
</html>
