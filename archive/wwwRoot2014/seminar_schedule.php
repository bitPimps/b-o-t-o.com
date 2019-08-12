<?php
include_once("includes/cookie_language.php");
include_once("secured/config/phpConfig.php");
include_once("secured/phpinclude/common_db.php");
include_once("secured/phpinclude/classes/Seminar.php");
include_once("secured/phpinclude/classes/SeminarSR.php");

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

// Get SeminarSR
$seminarSR = new SeminarSR($dbConn, 0, 5000, "NoFR", "country", 1);
$seminars = $seminarSR->getSeminars();

// Close DB Connection
mysql_close($dbConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boto: Barral Osteopathic Teaching Organization</title>
<link rel="stylesheet" href="css/global.css" type="text/css" />
<link rel="stylesheet" href="css/sunny/jquery.ui.all.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.accordion.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#accordion").accordion({
		active: false,
		autoHeight: false,
		collapsible: true,
		navigation: true
	});
});
</script>
<?php include_once("includes/google_analytics.php"); ?>
</head>

<body>
<div id="container">
	<?php
	include_once("includes/nav_main.php");
	DrawNavMain("Seminar Schedule");
	?>
	<div id="container_middle">
		<div id="container_content">
			<div id="sidebar_left">
				<div style="width:217px; float:right; text-align:right; margin:20px 0;">
					<img src="images/jean-pierre_barral.jpg" name="img_jpb" width="150" id="img_jpb" />
					<div style="color:#4d0b0c; margin-top:7px;">Jean-Pierre Barral<br />DO, MRO(F), PT</div>
				</div>
				<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
				<p>Jean-Pierre Barral, ost&eacute;opathe, est diplom&eacute; de l'Ecole Europ&eacute;enne d' Ost&eacute;opathie de Maidstone (Angleterre) et de la facult&eacute; de m&eacute;decine de Paris-Nord (d&eacute;partement m&eacute;decine manuelle et ost&eacute;opathie). Il a exerc&eacute; une quarantaine d'ann&eacute;es à Grenoble et a toujours privil&eacute;gi&eacute; le contact avec le patient, ne donnant qu'un cours par mois, c'est très recemment qu'il a augment&eacute; son temps de s&eacute;minaire. &quot;C'est en soignant les patients et en apprenant sans cesse l'anatomie qu'on devient un r&eacute;el professionnel&quot;, se plait-il à r&eacute;p&eacute;ter.</p>
				<?php } else { ?>
				<p>Jean-Pierre Barral, osteopath graduated from the European School of Osteopathy of Maidstone (England) and the Faculty of Medecin of Paris Nord (Department of Osteopathy and Manual Medicine). For forty years, he has had his practice at Grenoble, France.  He has always given preference to working with his patient and previously taught just one seminar per month. It's only recently that he has spent more time teaching. &quot;It's in treating patients and learning endless anatomy that you become a real professional&quot;, he likes to repeat.</p>
				<?php } ?>
			</div>
			<div id="content">
				<h1>B.O.T.O. Seminar Schedule</h1>
				<div id="accordion">
					<?php for ($i = 0; $i<count($seminars); $i++){ ?>
					<h3><a href="#<?php echo $seminars[$i]->getId(); ?>"><?php echo html_entity_decode($seminars[$i]->getCountry()); ?></a></h3>
					<div>
						<p><?php if($seminars[$i]->getCity()!="") { ?><strong><?php echo html_entity_decode($seminars[$i]->getCity()); ?></strong><br /><?php } ?>
							<?php if($seminars[$i]->getSponsorName()!=="") { ?>Sponsor: <?php echo html_entity_decode($seminars[$i]->getSponsorName()); ?><br /><?php } ?>
							<?php if($seminars[$i]->getSponsorBusName()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSponsorBusName()); ?><br /><?php } ?>
							<?php if($seminars[$i]->getEmail()!="") { ?><a href="mailto:<?php echo html_entity_decode($seminars[$i]->getEmail()); ?>"><?php echo html_entity_decode($seminars[$i]->getEmail()); ?></a><br /><?php } ?>
							<?php if($seminars[$i]->getPhone()!="") { ?><?php echo html_entity_decode($seminars[$i]->getPhone()); ?><?php } ?></p>
						<?php if($seminars[$i]->getAddress()!="") { ?><p><?php echo html_entity_decode($seminars[$i]->getAddress()); ?></p><?php } ?>
						<p><?php if($seminars[$i]->getSeminarDate()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSeminarDate()); ?><br /><?php } ?>
							<?php if($seminars[$i]->getSeminarName()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSeminarName()); ?><br /><?php } ?></p>
						<?php if($seminars[$i]->getTeacher()!="") { ?><p>Teacher: <?php echo html_entity_decode($seminars[$i]->getTeacher()); ?></p><?php } ?>
					</div>
					<?php
					}
					if(count($seminars)==0)
					{
					?>
					<h3><a href="#">No Seminar Schedules Yet</a></h3>
					<div>
						<p>Please check back soon.</p>
					</div>
					<?php } ?>
				</div>
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
