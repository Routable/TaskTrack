<?php
session_start();

$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   $taskID = $_SESSION["tID"];
   $taskStatus = $_POST["taskpriority"];
   $tuseremail = $_SESSION["user"];

   $sql1 = "SELECT status FROM TASKS WHERE task_id='$taskID'";
   $result = mysqli_query($mysqli, $sql1);
   $sql2 = "UPDATE TASKS SET status = '$taskStatus' WHERE task_ID='$taskID'";
   
   
   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
     
       $sql2 = "UPDATE TASKS SET status = '$taskStatus', date_closed = CURRENT_TIME WHERE task_ID='$taskID'";
       $res = mysqli_query($mysqli, $sql2);
   
   if ($res === TRUE) {
   mysqli_close($mysqli);
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
    printf("Errormessage: %s\n", $mysqli->error);
    mysqli_close($mysqli);

     
     //Error Checking
     //printf("Errormessage: %s\n", $mysqli->error);
     //         mysqli_close($mysqli);
  }

  } 
}
}


?>