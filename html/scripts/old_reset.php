<?php 
session_start();
if($_SESSION['reset']== true){
      echo "<div id=\"reset\"> <p>If the email you specified exists in our system, we've sent a password reset link to it.</p></div>";
      unset($_SESSION['reset']);
      } 
?>
<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Reset Password</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
      <div class="resetBox">
          <a href="index.php"><img src="img/logosmall.png" class="user" alt="TaskTrack"></a>
          <form action="/scripts/resetpassword.php" method="post">
          <legend>Reset Password</legend>
          <p>Email</p>
          <input type="email" label="false" placeholder="Email" required="required" spellcheck="false" name="forgot_password[email]" autofocus autocomplete="off">
          <input type="submit" name="commit" value="Reset my password">
          </form>
      </div>
  </body>
</html>
