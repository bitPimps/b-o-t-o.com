<?php
include_once("includes/cookie_language.php");
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
	DrawNavMain("Seminar Types");
	?>
	<div id="container_middle">
		<div id="container_content">
			<div id="sidebar_left">
				<div style="width:217px; float:right; text-align:right; margin:20px 0;">
					<img src="images/jean-pierre_barral.jpg" name="img_jpb" width="150" id="img_jpb" />
					<div style="color:#4d0b0c; margin-top:7px;">Jean-Pierre Barral<br />DO, MRO(F), PT</div>
				</div>
				<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
				<p>Jean-Pierre Barral, ost&eacute;opathe, est diplom&eacute; de l'Ecole Europ&eacute;enne d' Ost&eacute;opathie de Maidstone (Angleterre) et de la facult&eacute; de m&eacute;decine de Paris-Nord (d&eacute;partement m&eacute;decine manuelle et ost&eacute;opathie). Il a exerc&eacute; une quarantaine d'ann&eacute;es à Grenoble et a toujours privil&eacute;gi&eacute; le contact avec le patient, ne donnant qu'un cours par mois, c'est tr&egrave;s recemment qu'il a augment&eacute; son temps de s&eacute;minaire. &quot;C'est en soignant les patients et en apprenant sans cesse l'anatomie qu'on devient un r&eacute;el professionnel&quot;, se plait-il à r&eacute;p&eacute;ter.</p>
				<?php } else { ?>
				<p>Jean-Pierre Barral, osteopath graduated from the European School of Osteopathy of Maidstone (England) and the Faculty of Medecin of Paris Nord (Department of Osteopathy and Manual Medicine). For forty years, he has had his practice at Grenoble, France.  He has always given preference to working with his patient and previously taught just one seminar per month. It's only recently that he has spent more time teaching. &quot;It's in treating patients and learning endless anatomy that you become a real professional&quot;, he likes to repeat.</p>
				<?php } ?>
			</div>
			<div id="content">
				<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>
				<h1>B.O.T.O. (Barral Osteopathic Teaching Organization) Seminar Descriptions</h1>
				<div id="accordion">
					<h3><a href="#1">Les manipulations visc&eacute;rales avanc&eacute;es</a></h3>
					<div>
						<p>Synopsis: The workshop will present specific and advanced techniques and explain the anatomy, breathing mechanism, function and physiology of the thorax.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Build on the knowledge of the thorax region as learned in VM4.</li>
							<li>Review the myofascial structures of the thorax.</li>
							<li>Explore the hyoid suspensory apparatus, thyroid, tonsils and pharynx.</li>
							<li>Learn more precise techniques for the esophagus, pleura, heart and pericardium.</li>
							<li>Classify retropharangeal space.</li>
							<li>Discover treatment techniques to enhance the breathing mechanism.</li>
						</ul>
						<p>Required Advance Reading: The Thorax by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#2">Le diagnostic thermique manuel et les lib&eacute;rations visc&eacute;ro-&eacute;motionnelles</a></h3>
					<div>
						<p>Synopsis: This seminar explores the use of Manual Thermal Evaluation to evaluate and improve organ functions, as well as the connection between the organs and our emotions.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Learn the use of Manual Thermal Evaluation to find restrictions and organ dysfunction in the body.</li>
							<li>Explore the synchronicity between the body and brain, and how that affects the health of a person.</li>
							<li>Discover how the brain uses the internal organs to discharge and express excess energy (often of emotional origin) and how that affects structural integrity.</li>
							<li>Practice working with energy loss, locating structural restrictions contributing to pain, and managing a therapeutic session.</li>
						</ul>
						<p>Required Advance Reading: Manual Thermal Evaluation by Jean-Pierre Barral, RPT, DO and Understanding the Messages of Your Body by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#3">Visceral Vascular Manipulation; Upper Body<br />Visceral Vascular Manipulation; Lower Body</a></h3>
					<div>
						<p>Synopsis: This course explores evaluation and treatment techniques for the vascular system of the body.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Review the anatomy and physiology of the vascular system, particularly how arteries dilate or diminish in diameter depending on the function of the body.</li>
							<li>Understand how compression along vascular structures creates restriction patterns and pain throughout the body.</li>
							<li>Learn to locate and release restrictions along the vascular structures using direct techniques on the arteries like compression, decompression and elongation, as well as indirect techniques using the limbs.</li>
							<li>Explore manipulation of the soft tissues of the heart itself, aorta, subclavian artery, along with all the arteries connected with the visceral system.</li>
							<li>Enhance your understanding of how increased blood circulation to an organ improves function of the viscera, and learn how to improve the blood circulation to organs, directly and/or indirectly.</li>
							<li>Learn treatment of the vaso-pressive system and the brain.</li>
							<li>Discover the research done with doppler ultrasound to determine the best mobilizations of the arteries to improve local and general blood circulation.</li>
							<li>Learn practical integration of vascular treatment into the therapeutic session.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#4">Neuromeningeal Manipulation; An Osteopathic Approach to Trauma</a></h3>
					<div>
						<p>Synopsis: This is a specialized course focusing on the impact of whiplash.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Study the three primary areas of trauma as they relate to whiplash: physical laws, evaluation and treatment.</li>
							<li>Learn the appropriate anatomy and physiology for treatment of whiplash and trauma conditions.</li>
							<li>Learn to locate and release restrictions along the meningeal system.</li>
							<li>Assess injuries to the soft tissues of the cervical region and learn treatment protocols for optimal release.</li>
							<li>Learn tests to determine restriction patterns of the cervicobrachial region.</li>
							<li>Understand how whiplash creates restriction patterns throughout the body.</li>
							<li>Identify techniques that encompass the whole body, as the whole body receives collision forces in a whiplash injury, not just the cervical spine.</li>
							<li>Learn to evaluate restrictions in the lumbosacral region.</li>
							<li>Discover new applications of visceral manipulation principles and techniques as they can be utilized for patients presenting whiplash and other conditions involving trauma.</li>
							<li>Compare treatment sequence and tests for whiplash and traumatic injuries.</li>
						</ul>
						<p>Required Advance Reading: Trauma: An Osteopathic Approach by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#5">Peripheral Nerve Manipulation; Upper Body<br />Peripheral Nerve Manipulation; Lower Body</a></h3>
					<div>
						<p>Synopsis: These courses explore evaluation and treatment techniques for peripheral nerves of the upper and lower body.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore in detail the anatomy and function of the peripheral nerves of the upper and lower body.</li>
							<li>Discover typical pain patterns that arise from dysfunction of these peripheral nerves.</li>
							<li>Learn evaluation methods and treatment techniques to facilitate normal functioning of these peripheral nerves.</li>
							<li>Discover various methods for releasing restrictions in nerves.</li>
							<li>Explore practical integration into treatment sessions.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#6">Brain and Cranial Nerve Manipulation</a></h3>
					<div>
						<p>Synopsis: This course explores evaluation and treatment techniques for nerves of the brain, and cranial region.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore in detail the anatomy and function of the brain and cranial nerves.</li>
							<li>Discover typical pain patterns that arise from dysfunction of the brain and cranial nerves.</li>
							<li>Learn evaluation methods and treatment techniques to facilitate normal functioning of these nerves.</li>
							<li>Learn differential evaluation skills to determine skull, suture and brain fixation.</li>
							<li>Explore how compressions of the brain cause dysfunction in the cranial nerves.</li>
							<li>Discover how intercranial pressure affects the function of the entire body, and cranial techniques to bring about normal functioning.</li>
							<li>Learn practical integration into treatment sessions.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Cranial Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#7">Les manipulations urog&eacute;nitales avanc&eacute;es</a></h3>
					<div>
						<p>Synopsis: This seminar studies the relationship between functional and structural mechanics of the pelvis.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Learn to identify, receive and conduct Jean-Pierre Barrals method of evaluation and treatment for the organ systems of the pelvic cavity, including the integration of the pelvic organs with the complex ligament systems of that body region.</li>
							<li>Discover techniques for differentiating between somatic and visceral causes for pelvic and low back problems.</li>
							<li>Discover how to integrate the pelvic organs with the complex ligament systems of the body region.</li>
							<li>Explore additional principles of direct and indirect approaches and their appropriate applications.</li>
							<li>Integrate the pelvis into the body with principles of Lines of Tension.</li>
						</ul>
						<p>Required Advance Reading: Urogenital Manipulation, by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#8">Nouvelle approche manipulative du membre sup&eacute;rieur</a></h3>
					<div>
						<p>Synopsis: This course focuses on the upper body and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major upper body joint (shoulder, elbow, wrist) for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#9">Nouvelle approche manipulative du membre inf&eacute;rieur</a></h3>
					<div>
						<p>Synopsis: This course focuses on the lower body and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major joint of the lower body (pelvis, knee, ankle) for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#10">Nouvelle approche manipulative de la colonne et du bassin</a></h3>
					<div>
						<p>Synopsis: This course focuses on the spine and cranium, and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major joint of the spine and cranium for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#11">Synth&egrave;se des diff&eacute;rents cours et leur application pratique</a></h3>
					<div>
						<p>Synopsis: This course is a fusion of all the levels of the Visceral Manipulation, Neural Manipulation and Manual Articular curriculum to enhance effectiveness of the evaluation and treatment process.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore the organs in greater depth: structure, ligaments, capsula, nerves.</li>
							<li>Learn more about the metabolic (direct manipulation in compression and decompression on the organs), energetic (organs, brain, nervous system) and emotional (each major organ) components of the body and how they are interrelated.</li>
							<li>Discover ways to combine the treatment of multiple organs, e.g., liver, right kidney, lung, spleen, left kidney, descending colon.</li>
							<li>Learn additional techniques to treat the neuro-viscero-emotional components of a pain condition.</li>
							<li>Explore how to lead a therapeutic session, perform an all encompassing assessment, and choose the best therapy to apply.</li>
						</ul>
						<p>Required Advance Reading: None.</p>
					</div>
				</div>
				<?php } else { ?>
				<h1>B.O.T.O. (Barral Osteopathic Teaching Organization) Seminar Schedule</h1>
				<div id="accordion">
					<h3><a href="#1">Advanced Visceral Manipulation</a></h3>
					<div>
						<p>Synopsis: The workshop will present specific and advanced techniques and explain the anatomy, breathing mechanism, function and physiology of the thorax.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Build on the knowledge of the thorax region as learned in VM4.</li>
							<li>Review the myofascial structures of the thorax.</li>
							<li>Explore the hyoid suspensory apparatus, thyroid, tonsils and pharynx.</li>
							<li>Learn more precise techniques for the esophagus, pleura, heart and pericardium.</li>
							<li>Classify retropharangeal space.</li>
							<li>Discover treatment techniques to enhance the breathing mechanism.</li>
						</ul>
						<p>Required Advance Reading: The Thorax by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#2">Manual Thermal Diagnosis and Liberation of the Viscero-emotional</a></h3>
					<div>
						<p>Synopsis: This seminar explores the use of Manual Thermal Evaluation to evaluate and improve organ functions, as well as the connection between the organs and our emotions.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Learn the use of Manual Thermal Evaluation to find restrictions and organ dysfunction in the body.</li>
							<li>Explore the synchronicity between the body and brain, and how that affects the health of a person.</li>
							<li>Discover how the brain uses the internal organs to discharge and express excess energy (often of emotional origin) and how that affects structural integrity.</li>
							<li>Practice working with energy loss, locating structural restrictions contributing to pain, and managing a therapeutic session.</li>
						</ul>
						<p>Required Advance Reading: Manual Thermal Evaluation by Jean-Pierre Barral, RPT, DO and Understanding the Messages of Your Body by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#3">Visceral Vascular Manipulation; Upper Body<br />Visceral Vascular Manipulation; Lower Body</a></h3>
					<div>
						<p>Synopsis: This course explores evaluation and treatment techniques for the vascular system of the body.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Review the anatomy and physiology of the vascular system, particularly how arteries dilate or diminish in diameter depending on the function of the body.</li>
							<li>Understand how compression along vascular structures creates restriction patterns and pain throughout the body.</li>
							<li>Learn to locate and release restrictions along the vascular structures using direct techniques on the arteries like compression, decompression and elongation, as well as indirect techniques using the limbs.</li>
							<li>Explore manipulation of the soft tissues of the heart itself, aorta, subclavian artery, along with all the arteries connected with the visceral system.</li>
							<li>Enhance your understanding of how increased blood circulation to an organ improves function of the viscera, and learn how to improve the blood circulation to organs, directly and/or indirectly.</li>
							<li>Learn treatment of the vaso-pressive system and the brain.</li>
							<li>Discover the research done with doppler ultrasound to determine the best mobilizations of the arteries to improve local and general blood circulation.</li>
							<li>Learn practical integration of vascular treatment into the therapeutic session.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#4">Neuromeningeal Manipulation; An Osteopathic Approach to Trauma</a></h3>
					<div>
						<p>Synopsis: This is a specialized course focusing on the impact of whiplash.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Study the three primary areas of trauma as they relate to whiplash: physical laws, evaluation and treatment.</li>
							<li>Learn the appropriate anatomy and physiology for treatment of whiplash and trauma conditions.</li>
							<li>Learn to locate and release restrictions along the meningeal system.</li>
							<li>Assess injuries to the soft tissues of the cervical region and learn treatment protocols for optimal release.</li>
							<li>Learn tests to determine restriction patterns of the cervicobrachial region.</li>
							<li>Understand how whiplash creates restriction patterns throughout the body.</li>
							<li>Identify techniques that encompass the whole body, as the whole body receives collision forces in a whiplash injury, not just the cervical spine.</li>
							<li>Learn to evaluate restrictions in the lumbosacral region.</li>
							<li>Discover new applications of visceral manipulation principles and techniques as they can be utilized for patients presenting whiplash and other conditions involving trauma.</li>
							<li>Compare treatment sequence and tests for whiplash and traumatic injuries.</li>
						</ul>
						<p>Required Advance Reading: Trauma: An Osteopathic Approach by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#5">Peripheral Nerve Manipulation; Upper Body<br />Peripheral Nerve Manipulation; Lower Body</a></h3>
					<div>
						<p>Synopsis: These courses explore evaluation and treatment techniques for peripheral nerves of the upper and lower body.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore in detail the anatomy and function of the peripheral nerves of the upper and lower body.</li>
							<li>Discover typical pain patterns that arise from dysfunction of these peripheral nerves.</li>
							<li>Learn evaluation methods and treatment techniques to facilitate normal functioning of these peripheral nerves.</li>
							<li>Discover various methods for releasing restrictions in nerves.</li>
							<li>Explore practical integration into treatment sessions.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#6">Brain and Cranial Nerve Manipulation</a></h3>
					<div>
						<p>Synopsis: This course explores evaluation and treatment techniques for nerves of the brain, and cranial region.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore in detail the anatomy and function of the brain and cranial nerves.</li>
							<li>Discover typical pain patterns that arise from dysfunction of the brain and cranial nerves.</li>
							<li>Learn evaluation methods and treatment techniques to facilitate normal functioning of these nerves.</li>
							<li>Learn differential evaluation skills to determine skull, suture and brain fixation.</li>
							<li>Explore how compressions of the brain cause dysfunction in the cranial nerves.</li>
							<li>Discover how intercranial pressure affects the function of the entire body, and cranial techniques to bring about normal functioning.</li>
							<li>Learn practical integration into treatment sessions.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Cranial Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#7">Advanced Urogenital Manipulation</a></h3>
					<div>
						<p>Synopsis: This seminar studies the relationship between functional and structural mechanics of the pelvis.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Learn to identify, receive and conduct Jean-Pierre Barrals method of evaluation and treatment for the organ systems of the pelvic cavity, including the integration of the pelvic organs with the complex ligament systems of that body region.</li>
							<li>Discover techniques for differentiating between somatic and visceral causes for pelvic and low back problems.</li>
							<li>Discover how to integrate the pelvic organs with the complex ligament systems of the body region.</li>
							<li>Explore additional principles of direct and indirect approaches and their appropriate applications.</li>
							<li>Integrate the pelvis into the body with principles of Lines of Tension.</li>
						</ul>
						<p>Required Advance Reading: Urogenital Manipulation, by Jean-Pierre Barral, RPT, DO.</p>
					</div>
					<h3><a href="#8">New Manual Articular Approach; Upper Body</a></h3>
					<div>
						<p>Synopsis: This course focuses on the upper body and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major upper body joint (shoulder, elbow, wrist) for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#9">New Manual Articular Approach; Lower Body</a></h3>
					<div>
						<p>Synopsis: This course focuses on the lower body and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major joint of the lower body (pelvis, knee, ankle) for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#10">New Manual Articular Approach; Spine and Cranium</a></h3>
					<div>
						<p>Synopsis: This course focuses on the spine and cranium, and integrates all aspects of the joint including the nerve, artery, bone, capsule, and ligaments, as well as visceral and emotional connections.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Delve into the joints like never before.  Examine the nerves of each joint, along with the arteries, meniscus, ligaments, capsule attachments and folds.</li>
							<li>Work with soft tissue mobilization of the associated bones, while looking at direct and indirect relationships between the bones of the body.</li>
							<li>Explore the relationship between the viscera and the joints.</li>
							<li>Discover how the joints receive and emit messages with other parts of the body, as well as the emotional connections.</li>
							<li>Learn how to evaluate and treat each major joint of the spine and cranium for its primary dysfunction from the anatomical or physiological systems that contribute to it.</li>
							<li>Explore such indications as clinical pain, sprains, arthrosis, and inflammation in a brand new way.</li>
						</ul>
						<p>Required Advance Reading: Manual Therapy for Peripheral Nerves by Jean-Pierre Barral, RPT, DO; and Alain Croibier, D.O.</p>
					</div>
					<h3><a href="#11">Synthesis of different modalities and their practical application</a></h3>
					<div>
						<p>Synopsis: This course is a fusion of all the levels of the Visceral Manipulation, Neural Manipulation and Manual Articular curriculum to enhance effectiveness of the evaluation and treatment process.</p>
						<p>Course Highlights:</p>
						<ul>
							<li>Explore the organs in greater depth: structure, ligaments, capsula, nerves.</li>
							<li>Learn more about the metabolic (direct manipulation in compression and decompression on the organs), energetic (organs, brain, nervous system) and emotional (each major organ) components of the body and how they are interrelated.</li>
							<li>Discover ways to combine the treatment of multiple organs, e.g., liver, right kidney, lung, spleen, left kidney, descending colon.</li>
							<li>Learn additional techniques to treat the neuro-viscero-emotional components of a pain condition.</li>
							<li>Explore how to lead a therapeutic session, perform an all encompassing assessment, and choose the best therapy to apply.</li>
						</ul>
						<p>Required Advance Reading: None.</p>
					</div>
				</div>
				<?php } ?>
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
