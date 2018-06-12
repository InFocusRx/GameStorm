<?php
$to      = 'nikitarezvan@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: support@gamestorm.ee' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>123</title>
</head>
<body>

	<h1>123</h1>
	
</body>
</html>