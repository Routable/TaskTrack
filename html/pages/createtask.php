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
    <html>
      <body>

      <form action="../scripts/creatingtask.php" method="post" autocomplete="off">
      
      <label for="taskname"><h2>Task Name:</h2></label><br>
      <input type='text' name='taskname' id = "taskname" maxlength="100" required style="padding:5px 190px 5px 5px"><br><br>
      
      <label for="taskdescription"><h2>Task Description:</h2></label><br>
      <textarea name='taskdescription' id="taskdescription" maxlength="500" rows="10" cols="50">Insert a brief description about your task here! (500 Character Limit)</textarea>
      
      <br>
      <br>
      <h2>Priority</h2>
      <br>
      <fieldset style="width:23%; padding:5px 5px 5px 5px;"> 
        <input type ='radio' name='taskpriority' value='High'> High <br>
        <input type ='radio' name='taskpriority' value='Medium' required>Medium<br>
        <input type ='radio' name='taskpriority' value='Low'> Low <br>
      </fieldset>
      <br><br>
      <input type="submit" value="Create Task" class="myButton">
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