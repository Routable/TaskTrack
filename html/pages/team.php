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
<title>Team</title>
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
      <li><a href="../main.php">Dashboard</a></li>
      <li><a href="tasks.php">Tasks</a></li>
      <li><a class="selected" href="team.php">Team</a></li>
      <li><a href="settings.php">Settings</a></li>
       <li><a href="/scripts/logout.php">Logout</a></li>
    </ul>
    
  </div>

  <div class="content">
    <h1>Team</h1>
    <p>Create a Team</p>

    <div id="box">
     <div class="box-top">News</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>

   <div id="box">
     <div class="box-top">News</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>


    <div id="box">
     <div class="box-top">News</div>
     <div class="box-panel">Lorem nes stuf</div>
    </div>


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