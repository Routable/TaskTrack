<?php
//set up a couple of functions for use by scripts in maillist

function doDB() {
	global $mysqli;
 
$servername = "localhost";
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";

//connect to server and select database
$mysqli = mysqli_connect($servername, $username, $password, "COSCPROJECT");



	//if connection fails, stop script execution
	if (mysqli_connect_errno()) {
    mysqli_close($mysqli);
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
}

function emailChecker($email) {
	global $mysqli, $check_res;

	//check that email is not already in list
	$check_sql = "SELECT id FROM subscribers WHERE email = '".$email."'";
	$check_res = mysqli_query($mysqli, $check_sql) or die(mysqli_error($mysqli));
}
?>