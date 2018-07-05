<?php //DISPLAYS LOGIN ERROR - DON'T FUCKING TOUCH THIS
session_start();
if($_SESSION['error']== true){
      echo "<div id=\"error\"> <p>Incorrect username or password.</p></div>";
      unset($_SESSION['error']);
      } 
if(isset($_SESSION['user']))
{
    header("Location: main.php");
    exit;
}
?>

<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="stylesheet" href="style.css">
      <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans');
      </style>
      
  </head>
  <body>
    <script>
    </script>
      <div class="loginBox">
          <a href="index.php"><img src="img/logosmall.png" class="user" alt="TaskTrack"></a>
          <h2>Log In Here</h2>
          <form action="/scripts/connect.php" method="post" autocomplete="off">>
              <p>Email</p>
              <input type ="email" name="email" placeholder="Enter Email" autofocus>
              <p>Password</p>
              <input type ="password" name="password" placeholder="••••••••" autocomplete="off">
              <input type="submit" name="" value="Sign In" autocomplete="off">
                <div id="forgot">
                  <a href="reset.php">Forgot Password?</a>
                </div>
          </form>
          <div class="space">
            <p id="log">Don't have an account? <a href="register.html">Sign Up!</a></p>
         </div>
      </div>
      
  </body>

</html>
