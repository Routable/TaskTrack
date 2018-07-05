<?php
session_start();
$_SESSION['tID'] = $_GET['tID'];
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
      <li><a class="selected" href="tasks.php"><img src="../img/verification.png" style="width:1.2em;padding-right: 5px;">Tasks</a></li>
      <li><a href="settings.php"><img src="../img/settings.png" style="width:1.2em;padding-right: 5px;">Settings</a></li>
      <li><a href="/scripts/logout.php"><img src="../img/exit.png" style="width:1.2em;padding-right: 5px;">Logout</a></li>
    </ul>
  </div>

   <div class="content">
    <h1>Task Information</h1>


     <div id="db" style="width:99%;padding-top:10px;padding-left:10px;">
     <div class="db-top" style="text-align:left;">Task Status</div>
     <div class="db-panel" style="text-align:left;"><?php getTask(Status); ?></div>
    </div>
    
     <div id="db" style="width:99%;padding-top:10px;padding-left:10px;">
     <div class="db-top" style="text-align:left;">Priority</div>
     <div class="db-panel" style="text-align:left;"><?php getTask(Priority); ?></div>
    </div>
    
     <div id="db" style="width:99%;padding-top:10px;padding-left:10px;">
     <div class="db-top" style="text-align:left;">Date Created</div>
     <div class="db-panel" style="text-align:left;"><?php getTask(date_created); ?></div>
    </div>
    
    <div id="db" style="width:99%;padding-top:10px;padding-left:10px;">
     <div class="db-top" style="text-align:left;">Task Name</div>
     <div class="db-panel" style="text-align:left;"> <?php getTask(task_name); ?> </div>
    </div>
    
    <div id="db" style="width:99%;padding-top:20px;padding-left:10px;">
     <div class="db-top" style="text-align:left;">Description</div>
     <div class="db-panel" style="text-align:left;"> <?php getTask(description); ?></div>
    </div>
    
     
     <form action="../scripts/userUpdateTask.php" method="post">
     <br><br>
       <h2>Assign Task Status</h2>
       <br>
      <select name="taskpriority" style="padding:10px 10px 10px 10px;font-weight:bold;font-size:20px;">
        <option value="Open">Open</option>
        <option value="Closed">Closed</option>
      </select>
      <br><br>
      <input type="submit" value="Update Task" class="myButton">
      </form>    
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

<?php
function getTask($X){

$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT");

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   $taskID = $_GET['tID'];
  
   $sql = "SELECT $X FROM TASKS WHERE task_id='$taskID'";
   
   $result = mysqli_query($mysqli, $sql);
   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
       echo $row["$X"];
       break;
   
   if ($res === TRUE) {
   mysqli_close($mysqli);
     header("Location: ../pages/tasks.php");
    } else {
    printf("Errormessage: %s\n", $mysqli->error);
    mysqli_close($mysqli);
    //header("Location: ../main.php");
    }
    }
    }
    }
    }
    
    
/*  NOTE FROM STEVEN: Replaced your functions with my getTask function above. Less repeating of code, just call getTask(METHOD) where METHOD = whatever you want from the DB. See lines 50, 55, 60, 65 for examples.
function getTaskName(){

$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT");

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   $taskID = $_GET['tID'];
  
   $sql = "SELECT task_name FROM TASKS WHERE task_id='$taskID'";
   
   $result = mysqli_query($mysqli, $sql);
   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
       echo $row["task_name"];
       break;
   
   if ($res === TRUE) {
   mysqli_close($mysqli);
     header("Location: ../pages/tasks.php");
    } else {
    printf("Errormessage: %s\n", $mysqli->error);
    mysqli_close($mysqli);
    //header("Location: ../main.php");
    }
    }
    }
    }
    }

function getTaskDescription(){

$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT");

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {
 
   $taskID = $_GET['tID'];
  
   $sql = "SELECT description FROM TASKS WHERE task_id='$taskID'";
   
   $result = mysqli_query($mysqli, $sql);
   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
       echo $row["description"];
       break;
   
   if ($res === TRUE) {
   mysqli_close($mysqli);
     header("Location: ../pages/tasks.php");
    } else {
    printf("Errormessage: %s\n", $mysqli->error);
    mysqli_close($mysqli);
    //header("Location: ../main.php");
    }
    }
    }
    }
}
*/

function updateTask(){

$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   $taskID = $_GET['tID'];
   $taskStatus = $_POST['taskpriority'];
   $tuseremail = $_SESSION["user"];
   

   $sql1 = "SELECT status FROM TASKS WHERE task_id='$taskID'";
   $result = mysqli_query($mysqli, $sql1);
   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
     
  
   $sql2 = "UPDATE TASKS SET status='$taskStatus' WHERE task_ID='$taskID'";
   $res = mysqli_query($mysqli, $sql2);
   
   if ($res === TRUE) {
   mysqli_close($mysqli);

    } else {
    mysqli_close($mysqli);

     
     //Error Checking
     //printf("Errormessage: %s\n", $mysqli->error);
     //         mysqli_close($mysqli);
  }

  } 
}
}
}
    
  
?>