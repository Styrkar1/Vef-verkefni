<?php
session_start();
 if (!isset($_SESSION['authenticated'])) {
 		header("Location: ./index.php");
 		exit;
 }

 // run this script only if the logout button has been clicked
if (isset($_POST['logout'])) {
 // empty the $_SESSION array
 $_SESSION = [];
 // end session and redirect
 session_destroy();
 header('Location: ./logins.php');
 exit;
}
require './classes/fileupload.php';
require_once './includes/timeout.php';
include './includes/title.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Verkefni 2<?php echo "&#8212;{$title}"; ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include './includes/header.php' ?>
		
		<div id="wrapper">
		
			<main>
				<div id="content">
					<div class="innertube">
							<p>Welcome to your profile.</p>
							<P>Click below to log out.</P>
							<form method="post" action="">
 								<input name="logout" type="submit" value="Log out">
							</form>
							<p></p>

<form action="" method="post" enctype="multipart/form-data">
  <p>
    <label for="image">Upload image:</label>
    <input type="file" name="image[]" id="image">
  </p>
  <p>
    <label for="image2">Upload image:</label>
    <input type="file" name="image[]" id="image2">
  </p>
  <p>
    <label for="image3">Upload image:</label>
    <input type="file" name="image[]" id="image3">
  </p>
  <p>
    <input type="submit" name="upload" id="upload" value="Upload">
  </p>
</form>
<pre>
<?php
if (isset($_POST['upload'])) {
  print_r($_FILES);
}
?>
					</div>
				</div>
			</main>
			
			<nav id="nav">
				<div class="Menu">
					
				<?php require './includes/Menu.php' ?>

			</nav>
		
		</div>
		
					<footer id="footer">
			<div class="innertube">
				<?php include './includes/footer.php'  ?>
			</div>
		</footer>
	</body>
</html>