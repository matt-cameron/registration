<?php

require 'message-body.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
define('SENDER', 'no-reply@homesteadheath.com');


// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
define('RECIPIENT', $_POST["email"]);
define('CC', 'matt@mtmc.ca, no-reply@mtmc.ca');

require 'aws.php';

// Other message information
define('SUBJECT','Homestead Heath - New Account Registration');

require_once 'Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Cc' => CC,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');

$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);

 // Create an SMTP client.
$mail = Mail::factory('smtp', $smtpParams);

// Send the email.
$result = $mail->send(RECIPIENT, $headers, $message);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  require 'success.php';
}


?>
