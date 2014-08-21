<ul class="menu">
		
<li<?php if($pageId == "home") { echo " class=\"active\""; } ?>>
	<a href="<?php echo ROOT_DIR ?>"><span>Home</span></a>
</li>	
<li class="parent-item<?php if( ($pageId == "technology") || ($pageId == "wntpathway") ) { echo " active"; } ?>">
	<a href="<?php echo ROOT_DIR ?>/technology.php"><span>Technology</span></a>
		<ul class="submenu">
			<li<?php if($pageId == "wntpathway") { echo " class=\"active\""; } ?>>
				<a href="<?php echo ROOT_DIR ?>/technology/wnt-pathway.php"><span>WNT Pathway</span></a>
			</li>
		</ul>
</li>	
<li class="parent-item<?php if( ($pageId == "contact") || ($pageId == "careers") || ($pageId == "contactinfo") ) { echo " active"; } ?>">
	<a href="<?php echo ROOT_DIR ?>/contact.php"><span>Contact</span></a>
	<ul class="submenu">
		<li<?php if($pageId == "careers") { echo " class=\"active\""; } ?>>
			<a href="<?php echo ROOT_DIR ?>/contact/careers.php"><span>Careers</span></a>
		</li>
		<li<?php if($pageId == "contactinfo") { echo " class=\"active\""; } ?>>
			<a href="<?php echo ROOT_DIR ?>/contact.php"><span>Contact Info</span></a>
		</li>
	</ul>
</li>	

				</ul>