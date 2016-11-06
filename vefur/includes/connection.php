<?php
$con = mysqli_connect("tsuts.tskoli.is","0501983759","mypassword","0501983759_picturebase");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

/*
$source = 'mysql:host=tsuts.tskoli.is;dbname=0501983759_picturebase';
$user = '0501983759';
$passw = 'mypassword';

// Sjá nánar um PDO t.d.: http://www.sitepoint.com/re-introducing-pdo-the-right-way-to-access-databases-in-php/ 
try {
	$conn = new PDO($source, $user, $passw);   
 	# Notum utf-8 og gerum það með SQL fyrirspurn exec sendir sql fyrirspurnir til database
 	$conn->exec('SET NAMES "utf8"');

} catch (PDOException $e) {
		echo 'Tenging mistókst: ' . $e->getMessage();
}
*/
?>