<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@ypurwesite.com';

$email_subject = 'New Form Submission';

$email_bpdy = "User Name: $name.\n".
                "user Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Meassage: $message .\n";


$to = 'paltaniya2004@gmail.com'

$headers = "Form: $email_form \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>