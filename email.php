<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Contact for Insurance"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$firstname = stripslashes($_REQUEST['firstname']); // sender's name
$lastname = stripslashes($_REQUEST['lastname']); // sender's email
$phone = stripslashes($_REQUEST['phone']); 
$email = stripslashes($_REQUEST['email']); 
$message = stripslashes($_REQUEST['message']);
$city = stripslashes($_REQUEST['city']);
$state = stripslashes($_REQUEST['state']); 
$topic = stripslashes($_REQUEST['topic']); 
$policy = stripslashes($_REQUEST['policy']);

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "FirstName: ".$firstname."\r\n";  // add sender's name to the message
$msg .= "LastName: ".$lastname."\r\n";  // add sender's email to the message
$msg .= "Phone: ".$phone."\r\n";  // add sender's email to the message
$msg .= "E-mail: ".$email."\r\n";  // add sender's email to the message
$msg .= "City: ".$city."\r\n";  // add sender's email to the message
$msg .= "State: ".$state."\r\n";  // add sender's email to the message
$msg .= "Topic: ".$topic."\r\n";  // add sender's email to the message
$msg .= "policy: ".$policy."\r\n";  // add sender's email to the message
$msg .= "Message: ".$message."\r\n";  // add sender's email to the message
$msg .= "Subject: ".$subject."\r\n\n"; // add subject to the message (optional! It will be displayed in the header anyway)
$msg .= "---Message--- \r\n";
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

if($mail) {
	header("location:index.html");
	//This is the message that will be shown when the message is successfully send
	
} else {
	echo 'Please Error Message Here.';   //This is the message that will be shown when an error occured: the message was not send
}

?>