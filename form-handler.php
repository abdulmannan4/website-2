<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['textarea'];

$email_from='info@yourwebsite.com';
$email_subject='NEW FORM SUBMISSION'
$email_body="User Name:$name.\n".
'User Email:$name.\n'.
'User Message:$message .\n';
$to='mannansheikh509@gmail.com';
$header="FROM: $email_from \r\n";
$header="Reply-To: $visitor_email \r\n";
mail($to,$email_body,$headers);
header("Location:contact.html");


?>