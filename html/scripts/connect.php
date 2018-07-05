<?php
session_start();

//check for required fields from the form
if ((!filter_input(INPUT_POST, 'email'))
        || (!filter_input(INPUT_POST, 'password'))) {
//if ((!isset($_POST["username"])) || (!isset($_POST["password"]))) {
 $_SESSION['error']=true;
	header("Location: ../index.php");
	exit;
}
//DATABASE DETAILS - DO NOT CHANGE UNLESS YOU'RE SURE OF WHAT THIS DOES
$servername = "localhost";
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";

//connect to server and select database
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT");

/* create and issue the query
$sql = "SELECT f_name, l_name FROM auth_users WHERE username = '".$_POST["username"].
        "' AND password = PASSWORD('".$_POST["password"]."')";
*/

//create and issue the query
$targetname = strtolower(stripslashes(filter_input(INPUT_POST, 'email'))); //PREVENT SQL INJECTION 
$targetpasswd = stripslashes(filter_input(INPUT_POST, 'password')); //PREVENT SQL INJECTION
$sql = "SELECT FIRST_NAME FROM USERS WHERE EMAIL = '".$targetname.
        "' AND password = sha1('".$targetpasswd."')";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//get the number of rows in the result set; should be 1 if a match
if (mysqli_num_rows($result) == 1) {

  //SET AUTH COOKIE
    $_SESSION['user'] = $targetname;
	 header("Location: ../main.php");
} else {
	//redirect back to login form if not authorized
 $_SESSION['error']=true;
	header("Location: ../index.php");
	//exit;
}
?>
