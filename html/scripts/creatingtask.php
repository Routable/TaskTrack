<?php
session_start();

/* CREDENTIALS FOR DB AUTHENTICATION -------------------> START */
$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
/* CREDENTIALS FOR DB AUTHENTICATION -------------------> END */

if (mysqli_connect_errno()) {
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   //Leave this variable up here, otherwise no 'Actor' is inserted.
   $tuseremail = $_SESSION["user"];

/*---Query to find users' first name for the 'Actor' column in the TASKS Database---> START */
   $sqlactor = "SELECT FIRST_NAME FROM USERS WHERE EMAIL = '$tuseremail'";
   $aresult = mysqli_query($mysqli, $sqlactor);
   
   if(mysqli_num_rows($aresult) > 0){
     while($row = mysqli_fetch_assoc($aresult)){
       $tactor = strtolower(filter_var($row["FIRST_NAME"], FILTER_SANITIZE_STRING));
   }
   }
/*-------------------------------------------> END */

   $tname = $_POST['taskname'] = filter_var($_POST['taskname'], FILTER_SANITIZE_STRING);
   $tdescription = $_POST['taskdescription'] = filter_var($_POST['taskdescription'], FILTER_SANITIZE_STRING);
   $tstatus = "Open";
   $date = date("Y-m-d");
   $tpriority = $_POST['taskpriority'] = filter_var($_POST['taskpriority'], FILTER_SANITIZE_EMAIL);
   
   $sql = "INSERT INTO TASKS (actor, task_name, description, status, priority, user_email) VALUES ('$tactor', '$tname', '$tdescription', '$tstatus', '$tpriority', '$tuseremail')";
   $res = mysqli_query($mysqli, $sql);
   
   if ($res === TRUE) {
   mysqli_close($mysqli);
     header("Location: ../pages/tasks.php");
    } else {
    mysqli_close($mysqli);
    header("Location: ../main.php");
     
     //Error Checking
     //printf("Errormessage: %s\n", $mysqli->error);
     //         mysqli_close($mysqli);
  }

  } 

?>