<?php
if ($error) {
 echo "<p>$error</p>";
}
?>
<form method="post" action="">
    <h1> Login </h1>
	       <p>
 <label for="username">Username:</label>
 <input type="text" name="username" id="username">
 </p>
 <p>
 <label for="password">Password:</label>
 <input type="password" name="password" id="password">
 </p>
 <p>
 <input name="login" type="submit" value="Log in">
 </p>

    <h1> Signup </h1>

<p>
     <label for="userS">Username:</label>
    <input name="userS" id="userS" type="text">
</p>
 <p>
      <label for="emailS">Email:</label>
     <input name="emailS" id="emailS" type="text">
</p>
  <p>
     <label for="passS">Password:</label>
     <input name="passS" id="passS" type="text">
</p>
<p>
   <input name="register" type="submit" value="Signup">
 </p>

</form>