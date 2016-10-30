<?php
include './includes/title.php';
?> 

<?php
$error = '';
if (isset($_POST['login'])) {
 session_start();
 $username = $_POST['username'];
 $password = $_POST['pwd'];
 // location of usernames and passwords
 $use ='admin';
 $pas ='12';

 if ($username == $use and $password == $pas) {
 	$_SESSION['authenticated'] = 'imset';
 	$_SESSION['start'] = time();
 	header('Location: ./profile.php');
 	exit;
 }
 else {
 	echo 'You failed';
 }
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Verkefni 2<?php echo "&#8212;{$title}"; ?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>		
	<?php
if ($error) {
 echo "<p>$error</p>";
} elseif (isset($_GET['expired'])) { ?>
 <p>Your session has expired. Please log in again.</p>
<?php } ?>

<?php include './includes/header.php' ?>

		
		<div id="wrapper">
		
			<main>
				<div id = "content">

<?php
	require './includes/loginform.php';
?>


				</div>
			</main>


			
			<nav id="nav">
				<div class="menu">
				<?php require './includes/Menu.php' ?>
					
					</div>
			</nav>
		
		</div>
		
					<footer id="footer">
			<div class="innertube">
				<?php include './includes/footer.php' ?>
			</div>
		</footer>
	
	</body>
</html>