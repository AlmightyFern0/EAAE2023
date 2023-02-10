<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

if(isset($_POST['submit'])){
	$to = "s280784@studenti.polito.it"; // Your email address
	$name = $_POST['name'];
    $surname = $_POST['surname'];
    $affiliation = $_POST['affiliation'];
    $session = $_POST['session'];
    $country = $_POST['country'];
	$from = $_POST['email'];
	$abstractTitle = $_POST['abstractTitle'];
	$keywords = $_POST['keywords'];
    $abstract = $_POST['abstract'];
    $bio = $_POST['bio'];
    $image = $_POST['image'];
    $copyEmail = $_POST['copyEmail'];
	$subject = "Contact Form Details";
	$headers = "From:" . $from;
    
    $message = "<!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
    <tr style='background: #eee;'><td colspan='2'><strong>Contact Form Details</strong> </td></tr>
    <tr>
        <td><strong>Name:</strong></td>
        <td>".$_POST['name']."</td>
    </tr>
    <tr>
        <td><strong>Mobile:</strong></td>
        <td>".$_POST['surname']."</td>
    </tr>
    <tr>
        <td><strong>Email:</strong></td>
        <td>".$_POST['affiliation']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['session']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['country']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['email']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['abstractTitle']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['keywords']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['abstract']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['bio']."</td>
    </tr>
    <tr>
        <td><strong>Message:</strong></td>
        <td>".$_POST['image']."</td>
    </tr>
	</table>
	</body>
	</html>";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->Host="smtp.studenti.polito.it";
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=465;
    $mail->Username="s280784@studenti.polito.it";
    $mail->Password="";
    $mail->setFrom($from,$name);
    $mail->addAddress($to);
    $mail->Subject=$subject;
    $mail->Body=$message;
    $mail->send();

    /*
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->Host="smtp.gmail.com";
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port=587;
    $mail->Username="lorenzomarcomin@gmail.com";
    $mail->Password="";
    $mail->setFrom($from,$name);
    $mail->addAddress($to);
    $mail->Subject=$subject;
    $mail->Body=$message;
    $mail->send();*/

    /*
    $subject = "Contact Form Details";
	
	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$headers .= "From:" . $from . "\r\n";

	$result = mail($to,$subject,$message,$headers);

	if ($result) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}

    if ($copyEmail) {
        $newResult = mail($_POST['email'], $subject, $message, $headers);
    }

    if ($newResult) {
		echo '<script type="text/javascript">alert("Your Message was sent Successfully!");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';

	}else{
		echo '<script type="text/javascript">alert("Sorry! Message was not sent, Try again Later.");</script>';
		echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
	}*/
}
?>