<?php
include_once("includes/cookie_language.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Boto: Barral Osteopathic Teaching Organization</title>
<link rel="stylesheet" href="css/home.css" type="text/css" />
<?php include_once("includes/google_analytics.php"); ?>
</head>

<body>
<div id="container">
	<?php
	include_once("includes/nav_main.php");
	DrawNavMain("Home");
	?>
	<div id="container_middle">
		<div id="sidebar_left">
			<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
			<h1>Continuing<br />Education<br />for the<br />Osteopathic<br />Field</h1>
			<?php } else { ?>
			<h1>Continuing<br />Education<br />for the<br />Osteopathic<br />Field</h1>
			<?php } ?>
			<div style="width:155px; float:right; margin:25px 50px 40px 0;">
				<img src="images/jean-pierre_barral.jpg" name="img_jpb" width="150" id="img_jpb" style="border:2px solid #762123;" />
				<div style="color:#762123; margin-top:7px;">Jean-Pierre Barral<br />DO, MRO(F), PT</div>
			</div>
		</div>
		<div id="content">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td width="67%" valign="top" style="padding-right:50px;">
						<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
						<p>En France, il n'  y avait pas de structure propre à Jean-Pierre Barral pour organiser les  séminaires. A l'heure actuelle, ces cours se font toujours par l'intermédiaire  de collèges ostéopathiques comme A.T Still à Lyon, Le Cethomm à Paris et l'eso  à Bordeaux. B.O.T.O va continuer à collaborer avec ces collèges et aussi mettre  en place sa propre structure académique.</p>
						<p>Le B.O.T.O a son  adresse en Camargue, son premier séminaire sera organisé en septembre 2012, en  association avec Le Groupe pluridisciplinaire de Munich. C'est d'ailleurs l'un  des buts recherchés, co-animer des séminaires avec des collèges et des  associations de professionnels.</p>
						<p>B.O.T.O ne fera  appel qu'à des personnes compétentes en contact avec des patients et avec une  longue expérience professionnelles.</p>
						<p><em><strong>Un diagnostic manuel complet</strong></em><br />
							Chaque patient qui vient consulter est unique, ce n'est pas uniquement la rencontre avec un patient mais avec sa vie. Même si pour des raisons didactiques on est obligés d'aborder un thème particulier, c'est en gardant en permanence l'esprit ostéopathique que les cours sont donnés.</p>
						<?php } else { ?>
						<p>In France, there was no specific organization through which Jean-Pierre Barral organized seminars. Previously the courses have always been held through one of the Osteopathic schools - A.T. Still in Lyon, The Cethomm in Paris and Bordeaux. B.O.T.O. will continue to collaborate with these schools, at the same time also set up a proper academic structure through which to offer seminars.</p>
						<p>B.O.T.O. is based in Camargue, France, and its first seminar will be organized in September 2012, in association with The Multidisciplinary Group of Munich. Along with doing research, B.O.T.O. will be collaborating with osteopathic schools and osteopathic associations to setup up seminars.</p>
						<p>B.O.T.O. is designed for serious osteopaths with extensive professional experience and many clinical hours treating patients.</p>
						<p><strong><em>A Complete Manual Diagnosis</em></strong><br />
							Every patient that comes for treatment is unique, as this is not only an encounter with the patient but also with his life. For educational purposes we will divide the seminars into certain modalities or specific areas of the body, at the same time we will keep the seminars grounded in the Osteopathic spirit and the holistic approach.</p>
						<?php } ?>
					</td>
					<td width="33%" valign="top">
						<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
						<p><strong><em>Voici les principaux thèmes:</em></strong></p>
						<p><a href="seminars.php#1">Les manipulations viscérales avancées</a></p>
						<p><a href="seminars.php#2">Le diagnostic thermique manuel et les libérations viscéro-émotionnelles</a></p>
						<p><a href="seminars.php#3">Visceral Vascular Manipulation; Upper Body<br />Visceral Vascular Manipulation; Lower Body</a></p>
						<p><a href="seminars.php#4">Neuromeningeal Manipulation; An Osteopathic Approach to Trauma</a></p>
						<p><a href="seminars.php#5">Peripheral Nerve Manipulation; Upper Body<br />Peripheral Nerve Manipulation; Lower Body</a></p>
						<p><a href="seminars.php#6">Brain and Cranial Nerve Manipulation</a></p>
						<p><a href="seminars.php#7">Les manipulations urogénitales avancées</a></p>
						<p><a href="seminars.php#8">Nouvelle approche manipulative du membre supérieur</a></p>
						<p><a href="seminars.php#9">Nouvelle approche manipulative du membre inférieur</a></p>
						<p><a href="seminars.php#10">Nouvelle approche manipulative de la colonne et du bassin</a></p>
						<p><a href="seminars.php#11">Synth&egrave;se des différents cours et leur application pratique</a></p>
						<?php } else { ?>
						<p><em><strong>Seminars taught through BOTO:</strong></em></p>
						<p><a href="seminars.php#1">Advanced Visceral Manipulation</a></p>
						<p><a href="seminars.php#2">Manual Thermal Diagnosis and Liberation of the Viscero-emotional</a></p>
						<p><a href="seminars.php#3">Visceral Vascular Manipulation; Upper Body<br />Visceral Vascular Manipulation; Lower Body</a></p>
						<p><a href="seminars.php#4">Neuromeningeal Manipulation; An Osteopathic Approach to Trauma</a></p>
						<p><a href="seminars.php#5">Peripheral Nerve Manipulation; Upper Body<br />Peripheral Nerve Manipulation; Lower Body</a></p>
						<p><a href="seminars.php#6">Brain and Cranial Nerve Manipulation</a></p>
						<p><a href="seminars.php#7">Advanced Urogenital Manipulation</a></p>
						<p><a href="seminars.php#8">New Manual Articular Approach: Upper Body</a></p>
						<p><a href="seminars.php#9">New Manual Articular Approach: Lower Body</a></p>
						<p><a href="seminars.php#10">New Manual Articular Approach: Spine and Cranium</a></p>
						<p><a href="seminars.php#11">Synthesis of different modalities and their practical application</a></p>
						<?php } ?>
					</td>
				</tr>
			</table>
		</div>
		<div id="content_bottom">
			<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
			<h1>Notre Credo - <em>La main</em></h1>
			<p>Notre métier est avant tout un métier manuel,&quot;feel first think after!&quot; (sentez d'abord, pensez après!) on peut tricher avec la parole mais pas avec la main. Un patient qui souffre  sent tout de suite si la main est sur la bonne zone et si elle lui apporte un soulagement. C'est avec vous qu'on veut partager cette expérience.</p>
			<?php } else { ?>
			<h1>Our Creed - <em>The Hand</em></h1>
			<p>Our trade is, above all else, a manual trade. &quot;Feel first, think after!&quot; One can cheat with the word but not with the hand. A patient that suffers feels right away if the hand is on the correct place and if it brings him a relief.</p>
			<?php } ?>
		</div>
	</div>
</div>
<form name="langSwitch" method="post" action="<?php echo basename($_SERVER['PHP_SELF']) ?>">
<input type="hidden" name="langSelected" />
</form>
</body>
</html>
