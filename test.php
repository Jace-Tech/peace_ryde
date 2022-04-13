<?php

// $to = 'jacealex151@gmail.com';
// $subject = 'Marriage Proposal';
// $from = 'jacealex@gmail.com';
 
// // To send HTML mail, the Content-type header must be set
// $headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// // Create email headers
// $headers .= 'From: '.$from."\r\n".
//     'Reply-To: '.$from."\r\n" .
//     'X-Mailer: PHP/' . phpversion();
 
// // Compose a simple HTML email message
// $message = '<html><body>';
// $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
// $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
// $message .= '</body></html>';
 
// // Sending email
// if(mail($to, $subject, $message, $headers)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }

    if(isset($_POST['hash'])) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);

        echo "<h1>$password</h1>";
        echo "<h1>$password2</h1>";
        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="password">
            <input type="text" name="password2">
            <button name="hash">Hash</button>
        </form>
    </body>
</html>