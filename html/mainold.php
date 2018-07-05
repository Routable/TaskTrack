<?php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}
?>

<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Home</title>
      <link rel="stylesheet" href="main_style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <div id ="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
    </div>

  <div class="profile-pic">
     <img src="img/placeholder2.png">
  </div>

  <div id="username">
    <p><?=$_SESSION['user'] ?></p>
  </div>

  <ul>
  <li><a href="main.php">Home</a></li>
  <li><a href="main.html">Tasks</a></li>
  <li><a href="main.html">Projects</a></li>
  <li><a href="main.html">Team</a></li>
  <li><a href="main.html">Settings</a></li>
  <li><a href="/scripts/logout.php">Logout</a></li>
  </ul>
    </div>

    <script>
    document.getElementById("sidebar").classList.toggle('active');
    
      function toggleSidebar() {
        var x = document.getElementById("sidebar");

        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          document.getElementById("sidebar").classList.toggle('active');
        }
      }
    </script>
  </body>
</html>

