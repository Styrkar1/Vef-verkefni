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
 <label for="pwd">Password:</label>
 <input type="password" name="pwd" id="pwd">
 </p>
 <p>
 <input name="login" type="submit" value="Log in">
 </p>

    <h1> Signup </h1>

            <p>
                <label for="UserS">Username:</label>

                <input name="UserS" id="UserS" type="text">
            </p>

            <p>
                <label for="EmailS">Email:</label>

                <input name="EmailS" id="EmailS" type="text">
            </p>

            <p>
                 <label for="PassS">Password:</label>

              <input name="passS" id="passS" type="text">
            </p>

            <p>
             <input name="send" type="submit" value="Signup">
             </p>

</form>