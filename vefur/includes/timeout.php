<?php
ob_start();
$timelimit = 15 * 60;
// what time is it? (gets the time)
$now = time();
$redirect = './logins.php';
// makes it so that if there is no session it'll redirect
if (!isset($_SESSION['authenticated'])) {
 header("Location: ./Gallery.php");
 exit;
} elseif ($now > $_SESSION['start'] + $timelimit) {
 // if the time limit is over it destroyes the session
 $_SESSION = [];

 // something the website told me to do with cookies
 if (isset($_COOKIE[session_name()])) {
 setcookie(session_name(), '', time()-86400, '/');
 }

 // killing session and redirecting
 session_destroy();
 header("Location: {./logins.php}?expired=yes");
 exit;
}
 else
  {
 $_SESSION['start'] = time();
}