<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>A Simple PHP File | Page 20</title>
</head>
<body>
    <h1><?php echo "Page 20"; ?></h1>
    <!-- mail(to, subject, message, headers, parameters) -->
    <?php
        $to = "daniel.certa.1228@gmail.com";
        $subject = "Email Test";
        $message= "This is an email test.\nThis is the next line of the email test.";
        $from = "mfdancerta@gmail.com";
        //send the email
        if(mail($to, $subject, $message)){
            echo "Your email to <b>$to</b> has been sent.<br>";
        } else {
            echo "Unable to send email. Please try again.<br>";
        }
        //HTML Email
        $to = 'maryjane@email.com';
        $subject = 'Marriage Proposal';
        $from = 'peterparker@email.com';
        
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Compose a simple HTML email message
        $message = '<html><body>';
        $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
        $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
        $message .= '</body></html>';
        
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            echo "Your mail to <b>$to</b> has been sent successfully.<br>";
        } else{
            echo 'Unable to send email. Please try again.<br>';
        }
        
    ?>

</body>
</html>