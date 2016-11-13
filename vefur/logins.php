<?php
include './includes/title.php';
require './includes/connection.php';
?> 

<?php
//THE LOGIN
session_start();
$error = '';
if (isset($_POST['login']))
{

 $username = $_POST['username'];
 $password = $_POST['password'];



$sql = "SELECT userID FROM `users` WHERE `userName`  = '$username' and `userPassword` = '$password'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1)
{
 	$_SESSION['authenticated'] = 'imset';
 	$_SESSION['start'] = time();
 	header('Location: ./profile.php');
 	exit;
}
else
{
$error = "IT'S WRONG";
}


}

//THE REGISTRATION

if(isset($_POST['register']))
{
	$userS = $_POST["userS"];
	$emailS = $_POST["emailS"];
	$passS = $_POST["passS"];

$sql = "SELECT userEmail FROM users WHERE userEmail ='$emailS'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
 echo "That email exists already.";
}

else
{
$query = mysqli_query($con, "INSERT INTO users (`userName`, `userEmail`, `userPassword`, `accessLevel`, `activity`) VALUES ('$userS', '$emailS', '$passS',1,1)");
 
if($query)
{
 echo "You are now registered.";
}
else
{
	echo "ripperoni";
}

}
}
// HOYL FUCK
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