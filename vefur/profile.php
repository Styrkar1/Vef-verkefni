<?php
session_start();
 if (!isset($_SESSION['authenticated'])) {
 		header("Location: ./index.php");
 		exit;
 }

 // if logout is clicked, runs this
if (isset($_POST['logout'])) {
 // removes the varaible from the session
 $_SESSION = [];
 // DESTROYES the session and redirects to the logins page
 session_destroy();
 header('Location: ./logins.php');
 exit;
}

require_once './includes/timeout.php';
include './includes/title.php';
require './classes/fileupload.php';


 if(isset($_POST['Update']))
{
	$userO = $_POST["userO"];
	$passO = $_POST["passO"];
	$passN = $_POST["passN"];
	$userN = $_POST["userN"];

$sql = "SELECT `userID` FROM `users` WHERE '$passO' = `userPassword` and '$userO' = `userName`";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
 echo "You must enter new credentials.";
}

else
{
$query = mysqli_query($con, "UPDATE `users` SET `userName`= '$userN',`userPassword`= '$passN'");
}
 
if($query)
{
 	echo "Credentials updated.";
}

else
{
	echo "ripperoni";
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
							<p>
								
							</p>

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
<p>Update Credentials</p>
 <label for="userO">Username:</label>
 <input type="text" name="userO">
 </p>
 <p>
 <label for="passO">Password:</label>
 <input type="password" name="passO">
 </p>
  <p>
 <label for="NewPass">New Password:</label>
 <input type="NewPass" name="NewPass">
 </p>
   <p>
 <label for="NewUser">New Username:</label>
 <input type="NewUser" name="NewUser">
 </p>

 <p>
 <input name="Update" type="submit" value="Updating">
 </p>

<pre>
<?php
if (isset($_POST['upload'])) {
  print_r($_FILES);

	$Upload = new upload();
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