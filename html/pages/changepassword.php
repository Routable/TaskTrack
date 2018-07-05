<?php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Create a Task</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <div class="logo">
    <a href="#">Task<span>Track</span></a>
  </div>
  
</div>


<a class="mobile">MENU</a>


<div id="container">

  <div class="sidebar">
    <ul id="nav">
      <li><a href="../main.php"><img src="../img/menu.png" style="width:1.2em;padding-right:5px;">Dashboard</a></li>
      <li><a class="selected" href="tasks.php"><img src="../img/verification.png" style="width:1.2em;padding-right: 5px;">Tasks</a></li>
      <li><a href="settings.php"><img src="../img/settings.png" style="width:1.2em;padding-right: 5px;">Settings</a></li>
       <li><a href="/scripts/logout.php"><img src="../img/exit.png" style="width:1.2em;padding-right: 5px;">Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Change Password</h1>
    <br>

    <html>
      <body>

      <form action="../scripts/userchangepassword.php" method="post">
      Current Password: <br>
      <input type='text' name='currentpassword'>
      <br><br>
      New Password: <br>
      <input type='text' name='newpassword'>
      <br><br>
      <input type="submit" value="Change Password">
      </form>

      </body>
      </html>


  </div>


</div><!-- #container -->

<script type="text/javascript">

	$(document).ready(function(){
     $("a.mobile").click(function(){
      $(".sidebar").slideToggle('fast');
     });

    window.onresize = function(event) {
      if($(window).width() > 480){
      	$(".sidebar").show();
      }
    };


	});

</script>

</body>
</html>