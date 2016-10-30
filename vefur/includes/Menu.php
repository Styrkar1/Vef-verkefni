	<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
	<ul>					
  <li><a href="index.php">
   <?php if ($currentPage == 'index.php') {
	echo 'id="active"'; } ?> Home</a></li>
  <li><a href="Gallery.php">
   <?php if ($currentPage == 'Gallery.php') {
	echo 'id="active"'; } ?>Gallery</a></li>
  <li><a href="Logins.php">
  <?php if ($currentPage == 'Logins.php') {
	echo 'id="active"'; } ?>Signup/Login</a></li>
  <li><a href="#about">

  <?php if ($currentPage == 'About.php') {
	echo 'id="active"'; } ?>
	About</a></li>
				</ul>