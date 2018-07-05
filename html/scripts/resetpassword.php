<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once('class.phpmailer.php');
include("class.smtp.php"); 



$email = $_POST['forgot_password'] = filter_var($_POST['forgot_password'], FILTER_SANITIZE_EMAIL);

//DATABASE DETAILS - DO NOT CHANGE UNLESS YOU'RE SURE OF WHAT THIS DOES
$servername = "localhost";
$username = "root";
$password = "6SZP)}+33Ez&^Uqt";

//connect to server and select database
$conn = new mysqli($servername, $username, $password, "COSCPROJECT");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT FIRST_NAME FROM USERS WHERE EMAIL = LOWER('".$email."')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $name = $row['FIRST_NAME'];
    $userpassword = generatePassword();
    }

$conn->close();

$mail = new PHPMailer();
$subject = "Password Reset";
$content = "Hi ".$name.", <br><br> We got a request to reset your TaskTrack password. <br><br>Your temporary password is <b>".$userpassword."</b><br><br>If you didn't request a password reset, please let us know.";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "donotreplytasktrack@gmail.com";
$mail->Password = "6SZP)}+33Ez&^Uqt";
$mail->Host     = "smtp.gmail.com";
$mail->Mailer   = "smtp";
$mail->SetFrom("donotreply@tasktrack.tk", "TaskTrackSupport");
$mail->AddReplyTo("donotreply@tasktrack.tk", "TaskTrackSupport");
//$mail->AddAddress("recipient address");
$mail->AddAddress("$email");
$mail->Subject = $subject;
$mail->WordWrap   = 80;
$mail->MsgHTML($content);
$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "Problem on sending mail";
} else {
$_SESSION['reset']= true;
header("Location: ../reset.php");

$conn = new mysqli($servername, $username, $password, "COSCPROJECT");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE USERS SET PASSWORD = sha1('".$userpassword."') WHERE EMAIL = '".$email."'";
if ($conn->query($sql) === TRUE) {
    $_SESSION['reset']= true;
    header("Location: ../reset.php");
} 
$conn->close();
}
} else {
    $_SESSION['reset']= true;
    header("Location: ../reset.php");
    }

?>

<?php
function generatePassword() {
$str = 'ABCDEF0123456789';
$shuffled = str_shuffle($str);


return $shuffled;
}
?>