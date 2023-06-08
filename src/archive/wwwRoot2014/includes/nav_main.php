<?php
function DrawNavMain($navMainOn)
{
?>
	<div id="container_top">
		<div id="logo"><a href="/index.php"><img src="/images/logo.jpg" alt="Barral Osteopathic Teaching Organization" name="img_logo" width="230" height="95" border="0" id="img_logo" /></a></div>
		<div id="nav_main">
			<ul>
				<li><a href="/index.php" title="Home"<?php if($navMainOn=="Home"){?> class="navmain_on"<?php } ?>>Home</a></li>
				<li><a href="/seminars.php" title="Seminar Types"<?php if($navMainOn=="Seminar Types"){?> class="navmain_on"<?php } ?>>Seminar<br />Types</a></li>
				<li><a href="/seminar_schedule.php" title="Seminar Schedule"<?php if($navMainOn=="Seminar Schedule"){?> class="navmain_on"<?php } ?>>Seminar<br />Schedule</a></li>
				<li><a href="/about.php" title="About"<?php if($navMainOn=="About"){?> class="navmain_on"<?php } ?>>About</a></li>
				<li><a href="/contact.php" title="Contact"<?php if($navMainOn=="Contact"){?> class="navmain_on"<?php } ?>>Contact</a></li>
				<li><a href="/index_fr.php" title="BOTO France"<?php if($navMainOn=="BOTO France"){?> class="navmain_on"<?php } ?>>BOTO<br />France</a></li>
				<li><a href="javascript:document.langSwitch.langSelected.value='<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>US<?php } else { ?>FR<?php } ?>'; document.langSwitch.submit();" onclick="javascript:document.langSwitch.langSelected.value='<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>US<?php } else { ?>FR<?php } ?>'; document.langSwitch.submit(); return false" title="<?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>In English<?php } else { ?>En Fran&ccedil;aise<?php } ?>"<?php if($navMainOn=="En Franciase"){?> class="navmain_on"<?php } ?>><?php if(isset($_REQUEST['langSelected']) && $_REQUEST['langSelected']=="FR"){ ?>English<?php } else { ?>Fran&ccedil;aise<?php } ?></a></li>
			</ul>
		</div>
		<div id="header"><img src="../images/header.jpg" alt="" name="img_header" width="1000" height="50" id="img_header" /></div>
	</div>
<?php
}
?>