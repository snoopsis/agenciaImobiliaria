<?php
/*
Name: 			Contact Form
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	6.0.0
*/

session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

require_once('php-mailer/PHPMailerAutoload.php');

// Step 1 - Enter your email address below.
$email = 'tarantula.lan@gmail.com';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;

$subject = $_POST['subject'];

$fields = array(
	0 => array(
		'text' => 'Nome',
		'val' => $_POST['name']
	),
	1 => array(
		'text' => 'Email',
		'val' => $_POST['email']
	),
	2 => array(
		'text' => 'Mensagem',
		'val' => $_POST['message']
	)
);

$message = '';

foreach($fields as $field) {
	$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
}

$mail = new PHPMailer(true);

try {

	$mail->SMTPDebug = $debug;                                 // Debug Mode

	// Step 2 (Optional) - If you don't receive the email, try to configure the parameters below:

	$mail->IsSMTP();                                         // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';				       // Specify main and backup server
	$mail->SMTPAuth = true;                                  // Enable SMTP authentication
	$mail->Username = '#';                    // SMTP username
    $mail->Password = '#';                              // SMTP password
	$mail->SMTPSecure = 'ssl';                               // Enable encryption, 'ssl' also accepted
	$mail->Port = 465;   								       // TCP port to connect to

	$mail->AddAddress($email);	 						       // Add another recipient

	//$mail->AddAddress('person2@domain.com', 'Person 2');     // Add a secondary recipient
	//$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address.
	//$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address.

	$mail->SetFrom($email, $_POST['name']);
	$mail->AddReplyTo($_POST['email'], $_POST['name']);

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->CharSet = 'UTF-8';

	$mail->Subject = 'Website Imobiliario Porto'.$subject;
	$mail->Body    = $message;

	$mail->Send();
	$arrResult = array ('response'=>'success');

} catch (phpmailerException $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
} catch (Exception $e) {
	$arrResult = array ('response'=>'error','errorMessage'=>$e->getMessage());
}

if ($debug == 0) {
	echo json_encode($arrResult);
}
