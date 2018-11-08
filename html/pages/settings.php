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
<title>Settings</title>
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
      <li><a href="tasks.php"><img src="../img/verification.png" style="width:1.2em;padding-right: 5px;">Tasks</a></li>
      <li><a class="selected" href="settings.php"><img src="../img/settings.png" style="width:1.2em;padding-right: 5px;">Settings</a></li>
       <li><a href="/scripts/logout.php"><img src="../img/exit.png" style="width:1.2em;padding-right: 5px;">Logout</a></li>
    </ul>
  </div>

   <div class="content">
    <h1>Account Settings</h1>


    <div id="db" style="width:100;">
     <div class="db-top">Update Password</div>
     
     <div class="db-panel"> 
        <form action="../scripts/userchangepassword.php" method="post">
          Current Password: <br>
        <input type='password' name='currentpassword'required style="padding:5px 5px 5px 5px">
        <br><br>
        New Password: <br>
        <input type='password' name='newpassword'required style="padding:5px 5px 5px 5px" id="pass1" onkeyup="checkPass(); return false;">
        <br><br>
         Confirm Password: <br>
        <input type='password' name='confirmpassword'required style="padding:5px 5px 5px 5px" id="pass2" onkeyup="checkPass(); return false;">
         <br><br>
        <input type="submit" value="Change Password" class="myButton" id="bnz">
      </form>
    </div>
</div>
   

<!--
      <div id="db" style="width:100;">
     <div class="db-top">Update Email</div>
     
     <div class="db-panel"> 
        <form action="../scripts/userchangeemail.php" method="post">
          Current Email: <br>
        <input type='email' name='currentemail'required style="padding:5px 5px 5px 5px">
        <br><br>
          New Email: <br>
        <input type='email' name='newemail'required style="padding:5px 5px 5px 5px" id="email1" onkeyup="checkEmail(); return false;">
        <br><br>
         Confirm New Email: <br>
        <input type='email' name='confirmemail'required style="padding:5px 5px 5px 5px" id="email2" onkeyup="checkEmail(); return false;">
         <br><br>
        <input type="submit" value="Change Email" class="myButton" id="bnz2">
      </form>
    </div>
</div>
//-->

<!--
     <div id="db" style="width:100;">
     <div class="db-top" style="background-color:red;">Update Password</div>
     
     <div class="db-panel"> 
       <h2>WARNING:</h2><h3>This action cannot be reversed. You will be prompted to confirm account deletion.</h3><br>
       <button onclick="myFunction()" class="myButton">Delete Account</button>
       <script>
function myFunction() {
    var confirm = prompt("Enter the word "DELETE" to confirm account deletion.");
    if(confirm = "DELETE") {
     window.location.href = "delete.php";
    } else {
    return false;
    }
   
     
}
//-->
</script>

 <script>
      
      function checkPass() {
        var pass1 = document.getElementById('pass1');
        var pass2 = document.getElementById('pass2');
        var button = document.getElementById("bnz");
        var goodColor = "rgba(0,128,0,0.3)";
        var badColor = "rgba(255,0,0,0.3)";

    if(pass1.value === '' || pass2.value === '') {
          document.getElementById('passwrong').style.display = 'none';
          pass2.style.background = "transparent";
          pass1.style.background = "transparent";
    } else {    
      if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        pass1.style.backgroundColor = goodColor;
        document.getElementById('bnz').disabled = false;
        document.getElementById('passwrong').style.display = 'none';
      } else{
        pass2.style.backgroundColor = badColor;
        pass1.style.backgroundColor = badColor;
        document.getElementById('bnz').disabled = true;
        document.getElementById('passwrong').style.display = 'block';
        
        }
    }
}

function checkEmail() {
        var pass1 = document.getElementById('email1');
        var pass2 = document.getElementById('email2');
        var button = document.getElementById("bnz2");
        var goodColor = "rgba(0,128,0,0.3)";
        var badColor = "rgba(255,0,0,0.3)";

    if(pass1.value === '' || pass2.value === '') {
          document.getElementById('passwrong').style.display = 'none';
          pass2.style.background = "transparent";
          pass1.style.background = "transparent";
    } else {    
      if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        pass1.style.backgroundColor = goodColor;
        document.getElementById('bnz').disabled = false;
        document.getElementById('passwrong').style.display = 'none';
      } else{
        pass2.style.backgroundColor = badColor;
        pass1.style.backgroundColor = badColor;
        document.getElementById('bnz').disabled = true;
        document.getElementById('passwrong').style.display = 'block';
        
        }
    }
}




      </script>
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