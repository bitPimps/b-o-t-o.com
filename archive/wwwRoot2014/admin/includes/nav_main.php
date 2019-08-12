<?php
function DrawNavMain($navMainOn)
{
?>
<div id="nav_main">
		<ul class="dropdown">
			<li><a href="/admin/home.php" title="Administration Home"<?php if($navMainOn=="Home"){?> class="nav_main_on"<?php } ?>>Home</a></li>
			<li><a href="/admin/seminars/index.php" title="Seminars"<?php if($navMainOn=="Seminars"){?> class="nav_main_on"<?php } ?>>Seminars</a>
				<ul class="sub_menu">
					<li><a href="/admin/seminars/index.php" title="Manage Seminar Schedules">Manage Seminar Schedules</a></li>
				</ul>
			</li>
			<li><a href="/admin/contact/controller.php?id=1" title="Contact"<?php if($navMainOn=="Contact"){?> class="nav_main_on"<?php } ?>>Contact</a>
				<ul class="sub_menu">
					<li><a href="/admin/contact/controller.php?id=1" title="Manage Contact Page Information">Manage Contact Page</a></li>
				</ul>
			</li>
		</ul>
	</div>
<?php } ?>