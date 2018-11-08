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
<title>Tasks</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="admin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src='script.js' type='text/javascript'></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700' rel='stylesheet' type='text/css'>
<script>
function sortTable(columnName){
 
 var sort = $("#sort").val();
 $.ajax({
  url:'fetch_details.php',
  type:'post',
  data:{columnName:columnName,sort:sort},
  success: function(response){
 
   $("#empTable tr:not(:first)").remove();
 
   $("#empTable").append(response);
   if(sort == "asc"){
     $("#sort").val("desc");
   }else{
     $("#sort").val("asc");
   }
 
  }
 });
}
</script>
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
    <a href="createtask.php" class="myButton" style="margin-bottom:10px;">Create New Task</a>

 <input type='hidden' id='sort' value='asc'>
 <table width='100%' id='empTable' cellpadding='10'>
 <tr>
 <th class="db"><span onclick='sortTable("task_id");'><img src="/img/arrow.png" style="width:0.8em;padding-right:5px;">ID</span></th>
  <th class="db"><span onclick='sortTable("task_name");'><img src="/img/arrow.png" style="width:0.8em;padding-right:5px;">Task Name</span></th>
  <th class="db"><span onclick='sortTable("description");'><img src="/img/arrow.png" style="width:0.8em;padding-right:5px;">Description</span></th>
  <th class="db"><span onclick='sortTable("date_created");'><img src="/img/arrow.png" style="width:0.8em;padding-right:5px;">Date Created</a></th>
  <th class="db"><span onclick='sortTable("priority");'><img src="/img/arrow.png" style="width:0.8em;padding-right:5px;">Priority</a></th>
 </tr>
 

 <?php 
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
  
  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
    } else {
      $tuseremail = $_SESSION["user"];
       $query = "SELECT * FROM TASKS where user_email='$tuseremail' AND status = 'Open'";
       $result = mysqli_query($mysqli, $query);

     while($row = mysqli_fetch_array($result)){
       $task_id = $row['task_id'];
       $taskname = $row['task_name'];
       $description = $row['description'];
       $datecreated = $row['date_created'];
       $priority = $row['priority'];        
?>
 <tr>
 <td><?php echo "<a href='viewtask.php?tID=$task_id'>$task_id</a>" ?></td>
  <td><?php echo $taskname; ?></td>
  <td><?php echo $description; ?></td>
  <td><?php echo $datecreated; ?></td>
  <td><?php echo $priority ?></td>
 </tr>

 
 <?php
 }
}


 ?>
    </table>
  </div>



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


function oldestTask(){
  $servername = "localhost"; 
  $username = "root";
  $password = "6SZP)}+33Ez&^Uqt";
  $mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
  
  if (mysqli_connect_errno()) {
    printf ("Connect failed: %s\n", mysqli_connect_error());
    exit(); 
  } else {
      $tuseremail = $_SESSION["user"];
      $sql2 = "SELECT task_ID, task_name, description FROM TASKS WHERE user_email = '$tuseremail' AND status = 'Open' ORDER BY task_ID";
      $result2 = mysqli_query($mysqli, $sql2);
      if(mysqli_num_rows($result2) > 0)
        {
         while($row = mysqli_fetch_assoc($result2))
         {
           echo "Task ID: ";
           echo $row["task_ID"];
           echo "<br>";
           echo "Task Name: ";
           echo $row["task_name"];
           echo "<br>";
           echo "Description: ";
           echo $row["description"];
           echo "<br>";
           break;
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
           echo "Task ID: ";
           echo $row["task_id"];
           echo "<br>";
           echo "Task Name: ";
           echo $row["task_name"];
           echo "<br>";
           echo "Description: ";
           echo $row["description"];
           echo "<br>";
        } 
       } else 
          {
         echo "You have no tasks!";
          }
    mysqli_close($mysqli);
    }
}
?>
