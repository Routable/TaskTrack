<?php
session_start();
if(!isset($_SESSION['user'])) {
  header("Location: ../index.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="pages/admin.css">
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


<div id="container"> <!-- #CONTAINER -->

  <div class="sidebar">
    <ul id="nav">
      <li><a class="selected" href="/main.php"><img src="/img/menu.png" style="width:1.2em;padding-right:5px;">Dashboard</a></li>
      <li><a href="/pages/tasks.php"><img src="/img/verification.png" style="width:1.2em;padding-right: 5px;">Tasks</a></li>
      <li><a href="/pages/settings.php"><img src="/img/settings.png" style="width:1.2em;padding-right: 5px;">Settings</a></li>
       <li><a href="/scripts/logout.php"><img src="/img/exit.png" style="width:1.2em;padding-right: 5px;">Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Dashboard</h1>
  
    
     <div id="db"style="float:left; width:33%;padding-left:10px;">
     <div class="db-top" style="background-color:#FF6347;">Total Completed Tasks</div>
     <div class="db-panel"> <?php getTasks(Closed);?>  </div>
    </div>
    
    <div id="db" style="float:left;width:33%;padding-left:10px;"">
     <div class="db-top" style="background-color:#30AB1C;">Outstanding Tasks</div>
     <div class="db-panel"> <?php getTasks(Open); ?>  </div>
    </div>
    
    <div id="db" style="float:left;width:33%;padding-left:10px;"">
     <div class="db-top"style="background-color:#9647FA;">Average Completion Time</div>
     <div class="db-panel"> <?php getTime();?> </div>
    </div>
    
    <div id="db" style="width:99%;padding-top:120px;padding-left:10px;">
     <div class="db-top">Oldest Task</div>
     <div class="db-panel"> <?php oldestTask(); ?></div>
    </div>


    <div id="db" style="width:99%;padding-left:10px;">
     <div class="db-top">Most Recent Task</div>
     <div class="db-panel"> <?php recentTask(); ?> </div>
    </div>


 
    
  </div> <!-- #content -->


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

function getTasks($X) {
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 


  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else {
   $tuseremail = $_SESSION["user"];
   $sql = "SELECT COUNT(task_id) AS TOTAL FROM TASKS WHERE user_email = '$tuseremail' AND status ='$X'";
   $result = mysqli_query($mysqli, $sql);
   }
if(mysqli_num_rows($result) > 0){
   $data=mysqli_fetch_assoc($result);
   echo $data['TOTAL'];
  }
  
  mysqli_close($mysqli);
}

function getPriority($X) {
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 


  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else {
   $tuseremail = $_SESSION["user"];
   $sql = "SELECT * FROM TASKS WHERE user_email = '$tuseremail' AND priority ='$X' AND status = 'Open'";
   $result = mysqli_query($mysqli, $sql);
   }
   if(mysqli_num_rows($result) > 0){
  printHeader();
  

     while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>".$row['task_name']."</td>";
      echo "<td>".$row['priority']."</td>";
      echo "<td>".$row['date_created']."</td>";
      echo "<td>".$row['description']."</td>";
      echo "</tr>"; 
     }
     echo "</table>";
     
   } else {
     echo "No Tasks Found! Hurray!";
   }
  
  mysqli_close($mysqli);
}

function getTime() {
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 


  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else {
     $tuseremail = $_SESSION["user"];
     $sql = "SELECT ROUND((AVG(TIME_TO_SEC(TIMEDIFF(date_closed,date_created)))/3600),2) AS TOTAL FROM TASKS WHERE user_email = '$tuseremail' AND status = 'Closed'";
     $result = mysqli_query($mysqli, $sql);
   }
  if(mysqli_num_rows($result) > 0){
   $data=mysqli_fetch_assoc($result);
   
   if($data['TOTAL'] <= 0) {
       echo "N/A";
   } else if($data['TOTAL'] <= 1.0) {
       $data['TOTAL'] = $data['TOTAL'] * 60; //convert to minutes
       echo $data['TOTAL']." Minutes";
   } else {
       echo $data['TOTAL']." Hours";
  } 
  
}
  
  mysqli_close($mysqli);
}

function printHeader() {
  echo "<table><tr>
    <th>Task Name</th>
    <th>Priority</th>
    <th>Date Created</th>
    <th>Description</th>
  </tr>";
}

function oldestTask(){

  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
  
  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else 
      {
      $tuseremail = $_SESSION["user"];
      $sql2 = "SELECT task_id, task_name, description FROM TASKS WHERE date_created = (select MIN(date_created) FROM TASKS WHERE user_email='$tuseremail' AND status = 'Open')";
      $result2 = mysqli_query($mysqli, $sql2);
      if(mysqli_num_rows($result2) > 0)
        {
         while($row = mysqli_fetch_assoc($result2))
         {
           echo "<b>Task Name: </b> ";
           echo $row["task_name"];
        } 
       } else {
         echo "You have no tasks!";
    }
    mysqli_close($mysqli);
    }
}

function recentTask(){
  
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
  
  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else 
    {
    $tuseremail = $_SESSION["user"];
    $sql3 = "SELECT task_id, task_name, description FROM TASKS WHERE date_created = (select MAX(date_created) FROM TASKS WHERE user_email='$tuseremail' AND status = 'Open')";
    $result3 = mysqli_query($mysqli, $sql3);  
    if(mysqli_num_rows($result3) > 0)
        {
         $row=mysqli_fetch_assoc($result3);
         {
           echo "Task Name: ";
           echo $row["task_name"];
        } 
       } else 
          {
         echo "You have no recent tasks!";
          }
    mysqli_close($mysqli);
    }
}
?>

