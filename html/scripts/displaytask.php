<?php
session_start();

/* CREDENTIALS FOR DB AUTHENTICATION -------------------> START */
$servername = "localhost"; 
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT"); 
/* CREDENTIALS FOR DB AUTHENTICATION -------------------> END */

if (mysqli_connect_errno()) {
  mysqli_close($mysqli);
  printf ("Connect failed: %s\n", mysqli_connect_error());
  exit();
  
} else {

   //Leave this variable up here, otherwise no 'Actor' is inserted.
   $tuseremail = $_SESSION["user"];

/*---Query to find users' first name for the 'Actor' column in the TASKS Database---> START */
   $sql = "SELECT * FROM TASKS WHERE user_email = '$tuseremail'";
   $result = mysqli_query($mysqli, $sql);

   
   if(mysqli_num_rows($result) > 0){
     while($row = mysqli_fetch_assoc($result)){
       echo "Task Name: ";
       echo $row["task_name"];
       echo "<br>";
       echo "Description: ";
       echo $row["description"];
       echo "<br>";
       echo "<br>";

   }
   }
   mysqli_close($mysqli);
/*-------------------------------------------> END */  
     //printf("Errormessage: %s\n", $mysqli->error);
     //         mysqli_close($mysqli);

  

  } 

?>