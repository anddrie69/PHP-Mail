<?php

$fullname			= $_POST['fullname'];
$email				= $_POST['email'];
$phonenumber		= $_POST['phonenumber'];
$message 			= $_POST['message'];

$mailku = 'anddrie@gmail.com';

if($email != '' && $fullname != ''){
	$subject = 'Message information';
	
	$message  = '<html><body>';
	$message .= '<p>Your message was successfully sent , and this is your messages./p><br />';
	$message .= '<h1>Your message</h1>';
	$message .= '<table>';
	$message .= '<tr><td width="300px">Full Name</td><td>'.$fullname.'</td></tr>';
	$message .= '<tr><td>Phone number</td><td>'.$phonenumber.'</td></tr>';
	$message .= '<tr><td>Message</td><td>'.$message.'</td></tr>';
	$message .= '</table>';
	$message .= '<br />';
	$message .= '<p>Thanks you for yor message, and then please wait for replay message from admin anddrie.com</p>';
	$message .='</body></html>';

	$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To:' . $fullname . ' <' . $email . '>' . "\r\n";
    $headers .= 'From: Anddrie Administrator <' .$mailku. '>' . "\r\n";
	
	
	$a_subject = 'Incoming messages';
	
	$a_message  = '<html><body>';
	$a_message .= '<p>Someone who sent message in pradesga.com  Would you please check his personal data and immediately send the message confirmation, because maybe he is going to become your customers. This is her message.</p> <br />';
	$message .= '<table>';
	$message .= '<tr><td width="300px">Full Name</td><td>'.$fullname.'</td></tr>';
	$message .= '<tr><td>Phone number</td><td>'.$phonenumber.'</td></tr>';
	$message .= '<tr><td>Message</td><td>'.$message.'</td></tr>';
	$message .= '</table>';
	$a_message .='</body></html>';
	
	$a_headers = 'MIME-Version: 1.0' . "\r\n";
    $a_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $a_headers .= 'To: Anddrie Management <' . $mailku . '>' . "\r\n";
    $a_headers .= 'From: ' . $fullname . ' <' . $email . '>' . "\r\n";
	
	if( mail( $email, $subject, $message, $headers ) ){
		mail( $mailku, $a_subject, $a_message, $a_headers );
		echo "<script>alert('Your message was successfully sent!!!');location.href='contact-us.html'</script>";
	}
	else
	{
		echo "<script>alert('Have something trouble with our system. Please to try again latter!!!!');location.href='contact-us.html'</script>";
	}
}else{
	echo "<script>alert('Your message was successfully sent!!!');location.href='contact-us.html'</script>";
}
