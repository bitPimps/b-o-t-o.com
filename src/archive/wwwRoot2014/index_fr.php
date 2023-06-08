<?php
include_once("secured/config/phpConfig.php");
include_once("secured/phpinclude/common_db.php");
include_once("secured/phpinclude/classes/Seminar.php");
include_once("secured/phpinclude/classes/SeminarSR.php");

// Connect to Database
$dbConn = connectBotoDb($dbHost, $dbUsername, $dbPassword);

// Get SeminarSR
$seminarSR = new SeminarSR($dbConn, 0, 5000, "France", "country", 1);
$seminars = $seminarSR->getSeminars();

// Close DB Connection
mysql_close($dbConn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boto: Barral Osteopathic Teaching Organization</title>
<link rel="stylesheet" href="css/home.css" type="text/css" />
<link rel="stylesheet" href="css/sunny/jquery.ui.all.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.accordion.min.js"></script>
<script type="text/javascript" src="js/jquery.ui/jquery.ui.button.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#accordion").accordion({
		active: 0,
		autoHeight: false,
		collapsible: false,
		navigation: true
	});
	$("button, input:submit, a", ".demo").button();
	$("a", ".demo").click(function() { return true; });
});
</script>
<?php include_once("includes/google_analytics.php"); ?>
</head>

<body>
<div id="container">
	<?php
	include_once("includes/nav_main.php");
	DrawNavMain("BOTO France");
	?>
	<div id="container_middle">
		<div id="sidebar_left">
			<h1>Continuing<br />Education<br />for the<br />Osteopathic<br />Field</h1>
			<div style="width:155px; float:right; margin:25px 50px 40px 0;">
				<img src="images/jean-pierre_barral.jpg" name="img_jpb" width="150" id="img_jpb" style="border:2px solid #762123;" />
				<div style="color:#762123; margin-top:7px;">Jean-Pierre Barral<br />DO, MRO(F), PT</div>
			</div>
		</div>
		<div id="content">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="67%" valign="top" style="padding-right:50px;">
						<p>En France, il n'  y avait pas de structure propre à Jean-Pierre Barral pour organiser les  séminaires. A l'heure actuelle, ces cours se font toujours par l'intermédiaire  de collèges ostéopathiques comme A.T Still à Lyon, Le Cethomm à Paris et l'eso  à Bordeaux. B.O.T.O va continuer à collaborer avec ces collèges et aussi mettre  en place sa propre structure académique.</p>
						<p>Le B.O.T.O a son  adresse en Camargue, son premier séminaire sera organisé en septembre 2012, en  association avec Le Groupe pluridisciplinaire de Munich. C'est d'ailleurs l'un  des buts recherchés, co-animer des séminaires avec des collèges et des  associations de professionnels.</p>
						<p>B.O.T.O ne fera  appel qu'à des personnes compétentes en contact avec des patients et avec une  longue expérience professionnelles.</p>
						<p><em><strong>Un diagnostic manuel complet</strong></em><br />
							Chaque patient qui vient consulter est unique, ce n'est pas uniquement la rencontre avec un patient mais avec sa vie. Même si pour des raisons didactiques on est obligés d'aborder un thème particulier, c'est en gardant en permanence l'esprit ostéopathique que les cours sont donnés.</p>
					</td>
					<td width="33%" valign="top">
						<div id="accordion">
							<h3><a href="#1">Des S&eacute;minaires en France:</a></h3>
							<div style="height:350px; overflow:auto;">
								<?php for ($i = 0; $i<count($seminars); $i++){ ?>
								<p><strong><?php echo html_entity_decode($seminars[$i]->getCountry()); ?></strong></p>
								<p><?php if($seminars[$i]->getCity()!="") { ?><strong><?php echo html_entity_decode($seminars[$i]->getCity()); ?></strong><br /><?php } ?>
									<?php if($seminars[$i]->getSponsorName()!=="") { ?>Sponsor: <?php echo html_entity_decode($seminars[$i]->getSponsorName()); ?><br /><?php } ?>
									<?php if($seminars[$i]->getSponsorBusName()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSponsorBusName()); ?><br /><?php } ?>
									<?php if($seminars[$i]->getEmail()!="") { ?><a href="mailto:<?php echo html_entity_decode($seminars[$i]->getEmail()); ?>"><?php echo html_entity_decode($seminars[$i]->getEmail()); ?></a><br /><?php } ?>
									<?php if($seminars[$i]->getPhone()!="") { ?><?php echo html_entity_decode($seminars[$i]->getPhone()); ?><?php } ?></p>
								<?php if($seminars[$i]->getAddress()!="") { ?><p><?php echo html_entity_decode($seminars[$i]->getAddress()); ?></p><?php } ?>
								<p><?php if($seminars[$i]->getSeminarDate()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSeminarDate()); ?><br /><?php } ?>
									<?php if($seminars[$i]->getSeminarName()!="") { ?><?php echo html_entity_decode($seminars[$i]->getSeminarName()); ?><br /><?php } ?></p>
								<?php if($seminars[$i]->getTeacher()!="") { ?><p>Teacher: <?php echo html_entity_decode($seminars[$i]->getTeacher()); ?></p><?php } ?>
								<hr />
								<?php
								}
								?>
							</div>
						</div>
						<div class="demo" style="margin-top:20px;"><a href="seminar_schedule.php">Des S&eacute;minaires dans D'autres Pays</a></div>
					</td>
				</tr>
			</table>
		</div>
		<div id="content_bottom">
			<h1>Notre Credo - <em>La main</em></h1>
			<p>Notre métier est avant tout un métier manuel,&quot;feel first think after!&quot; (sentez d'abord, pensez après!) on peut tricher avec la parole mais pas avec la main. Un patient qui souffre  sent tout de suite si la main est sur la bonne zone et si elle lui apporte un soulagement. C'est avec vous qu'on veut partager cette expérience.</p>
		</div>
	</div>
</div>
</body>
</html>
