/*this requires php to be running and smtp mail server inorder to send the mail to the email address*/
/*Setup Mail Server*/
<?php
// content of the eamil message
$emailContent = "Hello, I have been trying to contact you\nhope to hear from you soon";

// prevent a message being more than 70 chars
$emailContent = wordwrap($emailContent, 70);

// send the eamil to the person
mail("someone@example.com","Hello",$emailContent);
?>