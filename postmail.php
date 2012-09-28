<?php
@include_once("Mail.php");

$name = $_POST["Name"];
$subject = $_POST["Subject"];
$message = $_POST["Message"];
$from = $_POST["Email"];

// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name);
$message = stripslashes($message);
$subject = stripslashes($subject);
$from = stripslashes($from);

$to_address = "gaurav9576@yahoo.com";

// Check to see if a message was recieved
if(isset($message) and $message!="") {
    // send the message and show this page
    mail($to_address, 'Online Form: '.$subject, $_SERVER['REMOTE_ADDR']."\n\nName: ".$name."\n\n".$message, "From: $from");
} else {
    echo "no variables received, this page cannot be accessed directly";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact Form - Thank you</title>
    </head>
    <body>
        <p>Thank you for your submission.</p>
    </body>
</html>
