<?php
function gmail($to, $subject, $message){
    //path to PHPMailer class
    require_once('class.phpmailer.php');
    // optional, gets called from within class.phpmailer.php if not already loaded
    include("class.smtp.php"); 

    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";
    // telling the class to use SMTP
    $mail->IsSMTP();
    // enables SMTP debug information (for testing)
    // 1 = errors and messages
    // 2 = messages only
    $mail->SMTPDebug  = 0;
    // enable SMTP authentication
    $mail->SMTPAuth   = true;
    // sets the prefix to the servier
    $mail->SMTPSecure = "ssl";
    // sets GMAIL as the SMTP server
    $mail->Host       = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port       = 465;
    // GMAIL username
    $mail->Username   = "donotreplytasktrack@gmail.com";
    // GMAIL password
    $mail->Password   = "6SZP)}+33Ez&^Uqt";
    //Set reply-to email this is your own email, not the gmail account 
    //used for sending emails
    $mail->SetFrom('Steven_Bucholtz@hotmail.com');
    $mail->FromName = "Steven Bucholtz";
    // Mail Subject
    $mail->Subject    = $subject;

    //Main message
    $mail->MsgHTML($message);

    //Your email, here you will receive the messages from this form. 
    //This must be different from the one you use to send emails, 
    //so we will just pass email from functions arguments
    $mail->AddAddress($to, "");
    if(!$mail->Send()) 
    {
        //couldn't send
        return false;
    } 
    else 
    {
        //successfully sent
        return true;
    }
}
?>
