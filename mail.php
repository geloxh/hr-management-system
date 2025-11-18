<?php
    $to = "email"; // Change values
    $subject = "subject";
    $msg = "message";
    $headers = "header";
    $sql = mail($to.$subject.$msg.$headers);
    echo $sql;
?>

<?php
    require_once('user/mail/class.phpmailer.php');
    $mail = new PHPMailer(); // create a new object
    $mail -> IsSMTP(); // enable SMTP
    $mail -> SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail -> SMTPAuth = true; // authentication enabled
    $mail -> SMTPSecure = ''; // secure transfer enabled REQUIRED for Gmail
    $mail -> Host = "";
    $mail -> Port = 465; // or 587
    $mail -> IsHTML(true);
    $mail -> Username = "";
    $mail -> Password = "";
    $mail -> SetFrom("");
    $mail -> Subject = "";
    $mail -> Body = "";
    $mail -> AddAddress("");

    if(!$mail -> Send()) {
        echo "Mailer Error: " . $mail -> ErrorInfo;
    } else {
        echo "Message has been sent";
    }
?>

<?php
    $to = "to";
    $subject = "subject";
    $message = "message";
    $header = 'Form: nitinchhabhaiya9@gmail.com'. "\r\n".'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8';

    $mail = mail($to, "Subject:" . $subject, $message, $headers);
    if($mail) {
        echo "Mail successfully sent.";
    } else {
        echo "Mail sending failed.";
    }
?>