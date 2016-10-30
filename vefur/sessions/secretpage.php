<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
 header('Location: ./logins.php');
 exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Your very own secret ;;OO</title>
</head>
<body>

</body>
</html>