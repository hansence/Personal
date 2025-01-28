
<?php
// Get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "hansence2@gmail.com";
$subject = "Email from personal website";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = " 
    . $email . "\r\n Message =" . $message;

$headers = "From: noreply@cehansen.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:last.html");
?>


This code cannot work without a paid email service