<?php

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

   $fname = $_POST['first_name'] = strtolower(filter_var($_POST['first_name'], FILTER_SANITIZE_STRING));
   $lname = $_POST['last_name'] = strtolower(filter_var($_POST['last_name'], FILTER_SANITIZE_STRING));
   $email = $_POST['email'] = strtolower(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
   $password = sha1($_POST['password']);
   $date = date("Y-m-d");
   
   $sql = "INSERT INTO USERS (FIRST_NAME, LAST_NAME, EMAIL, PASSWORD, DATE_JOIN) VALUES ('$fname', '$lname', '$email', '$password', '$date')";
   $res = mysqli_query($mysqli, $sql);
   
   if ($res === TRUE) {
     mysqli_close($mysqli);
     header("Location: ../registered.html");
    } else {
    mysqli_close($mysqli);
    header("Location: ../registryfail.html");
  }
  

  } 

?>