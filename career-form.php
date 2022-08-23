<?php 
$to = 'chauhanjeet3@gmail.com'; // Put in your email address here
$subject  = "Contact for Insurance"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
$firstname = stripslashes($_REQUEST['firstname']); // sender's name
$lastname = stripslashes($_REQUEST['lastname']); // sender's email
$email = stripslashes($_REQUEST['email']); 
$city = stripslashes($_REQUEST['city']);
$state = stripslashes($_REQUEST['state']); 

$message = stripslashes($_REQUEST['message']);
$zipcode = stripslashes($_REQUEST['zipcode']); 
$interest = stripslashes($_REQUEST['interest']);

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "FirstName: ".$firstname."\r\n";  // add sender's name to the message
$msg .= "LastName: ".$lastname."\r\n";  // add sender's email to the message
$msg .= "E-mail: ".$email."\r\n";  // add sender's email to the message
$msg .= "City: ".$city."\r\n";  // add sender's city to the message
$msg .= "State: ".$state."\r\n";  // add sender's state to the message
$msg .= "Zip Code: ".$zipcode."\r\n";  // add sender's zipcode to the message
$msg .= "Aarea of interest: ".$interest."\r\n";  // add sender's email to the message
$msg .= "Message: ".$message."\r\n";  // add sender's message to the message
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