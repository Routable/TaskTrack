<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
session_start();

$servername = "localhost";
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";

//connect to server and select database
$conn = new mysqli($servername, $username, $password, "COSCPROJECT");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$email = $_SESSION["user"];
$currentpassword = $_POST["currentpassword"];
$newpassword = $_POST["newpassword"];

$sql = "SELECT * FROM USERS WHERE EMAIL='$email' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
      {
      /* Leave for testing
      echo $row["FIRST_NAME"];
      echo $row["LAST_NAME"];
      echo $row["EMAIL"];
      echo $row["PASSWORD"];
      */
      
      //Making a variable to check SQL Password for the user.
      $sqlpass = $row["PASSWORD"];
      }
      
      //Hashing password user typed in for comparison
      $currentpass = (sha1($currentpassword));
      
      /* Leave for testing
      echo "<br>";
      echo $sqlpass;
      echo "<br>";
      echo "If " . $sqlpass . " isn't the same as " . $currentpass . " then we have a problem.";
      */
      
      //Comparing SQL statement to User-typed statement
      if($sqlpass === $currentpass) {
      
        $newpass = (sha1($newpassword));
        
        /* Leave for testing
        echo "<br>";
        echo "Almost there boys";
        */
        
        //Update Database
        $passwordsql = "UPDATE USERS SET PASSWORD='$newpass' WHERE EMAIL='$email'";
        $passwordresult = $conn->query($passwordsql);
        session_destroy();
        $conn->close();
        header("Location: ../index.php");
        
        } else {
          Echo "What the fuck did you just fucking say about me, you little bitch? I'll have you know I graduated top of my class in the Navy Seals, and I’ve been involved in numerous secret raids on Al-Quaeda, and I have over 300 confirmed kills. I am trained in gorilla warfare and I’m the top sniper in the entire US armed forces. You are nothing to me but just another target. I will wipe you the fuck out with precision the likes of which has never been seen before on this Earth, mark my fucking words. You think you can get away with saying that shit to me over the Internet? Think again, fucker. As we speak I am contacting my secret network of spies across the USA and your IP is being traced right now so you better prepare for the storm, maggot. The storm that wipes out the pathetic little thing you call your life. You’re fucking dead, kid. I can be anywhere, anytime, and I can kill you in over seven hundred ways, and that’s just with my bare hands. Not only am I extensively trained in unarmed combat, but I have access to the entire arsenal of the United States Marine Corps and I will use it to its full extent to wipe your miserable ass off the face of the continent, you little shit. If only you could have known what unholy retribution your little “clever” comment was about to bring down upon you, maybe you would have held your fucking tongue. But you couldn't, you didn't, and now you’re paying the price, you goddamn idiot. I will shit fury all over you and you will drown in it. You're fucking dead, kiddo.";
          $conn->close();
          header("Location: ../index.php");
          }
      
$conn->close();
}

?>