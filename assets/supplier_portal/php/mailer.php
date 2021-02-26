<?php

/**
 * @Mailer
 *
 */
$json = array();
$subject_message 		= "Contact Form Received";
$success_message 		= 'Message Sent.';
$failure_message 		= 'Message Fail.';
$recipient 				= 'etwordpress01@gmail.com';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	extract($_POST['contact']);
    // Get the form fields and remove whitespace.
    $name 		= strip_tags(trim($name));
    $name 		= str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email 		= filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    $message 	= trim($message);

    // Check that data was sent to the mailer.
    if (empty($name) OR empty($message) OR ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        $json['type'] = "error";
        $json['message'] = 'Oops! Please complete the form and also add valid email address.';
        echo json_encode($json);
        exit;
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    // Set the email subject.
    $subject = $subject_message;

    // Build the email content.
    $email_content = "You have received a new message form one of visitor. Informations are given below.\n";
	$email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        $json['type'] 		= "success";
        $json['message'] 	= $success_message;
        echo json_encode($json);
        die();
    } else {
        $json['type'] 		= "error";
        $json['message'] 	= $failure_message;
        echo json_encode($json);
        die();
    }
} else {
    $json['type'] = "error";
    $json['message'] = $failure_message;
    echo json_encode($json);
    die();
}